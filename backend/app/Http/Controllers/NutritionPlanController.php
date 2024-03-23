<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\User;
use App\Models\Gender;
use App\Models\UserNutrition;
use App\Models\NutritionalPlan;
use App\Models\NutritionalPlanTag;

class NutritionPlanController extends Controller
{
    private $openAIController;

    public function __construct(OpenAIController $openAIController)
    {
        $this->openAIController = $openAIController;
    }

    public function createNutritionPlan(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required',
                'age' => 'required',
                'id_gender' => 'required',
                'current_weight' => 'required',
                'height' => 'required',
                'id_nutritional_plan' => 'required',
            ]);

            $user = User::create($validated);
            error_log('User ID: ' . $user->id);

            $gender = Gender::find($validated['id_gender']);
            $nutritionalPlan = NutritionalPlan::find($validated['id_nutritional_plan']);
            if (!$nutritionalPlan) {
                return response()->json(['message' => 'El plan nutricional seleccionado no existe'], 400);
            }

            if ($nutritionalPlan->tags->isEmpty()) {
                return response()->json(['message' => 'El plan nutricional seleccionado no tiene tags asociadas'], 400);
            }
            
            $id_nutritional_tag = $nutritionalPlan->tags->random()->id;
            
            UserNutrition::create([
                'id_user' => $user->id,
                'id_nutritional_plan' => $validated['id_nutritional_plan'],
                'id_nutritional_tag' => $id_nutritional_tag,
                'created_date' => date('Y-m-d'),
                'updated_date' => date('Y-m-d')
            ]);

            $message = "Conviértete en mi nutricionista experto y crea un plan nutricional para una persona de {$validated['age']} años, género {$gender->description}, peso actual {$validated['current_weight']}, altura {$validated['height']} y el tipo de plan nutricional deseado es {$nutritionalPlan->description}. Por favor no incluyas encabezados, de saludo, solamente retorna el plan con la siguiente información: Objetivos del plan nutricional: 1,2,3,4 etc. Plan de alimentación (Frecuencia, Duración de las comidas, Desayuno, Almuerzo, Cena, Snacks. Consideraciones adicionales: 1,2,3... etc. También incluye el IMC. La información debe ser clara y precisa, presentada en formato de lista con viñetas y números para una lectura más fácil. Gracias.";
            $iaResponse = $this->openAIController->sendMessage($message);
            
            error_log('NutritionPlan data: ' . json_encode(['id_user' => $user->id, 'plan' => $iaResponse]));

            NutritionPlan::create([
                'id_user' => $user->id,
                'plan' => $iaResponse,
            ]);

            return response()->json(['plan' => $iaResponse]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al crear el plan nutricional: ' . $e->getMessage()], 500);
        }
    }

    public function updateNutritionPlan(Request $request, $id)
    {
        try {
            $user = User::find($id);
            $userNutrition = UserNutrition::where('id_user', $user->id)->first();
            $nutritionPlan = NutritionPlan::where('id_user', $user->id)->first();

            $user->fill($request->all());
            $userNutrition->fill($request->all());
            $nutritionPlan->fill($request->all());

            $user->save();
            $userNutrition->save();
            $nutritionPlan->save();

            return response()->json(['message' => 'Nutrition plan updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al actualizar el plan nutricional: ' . $e->getMessage()], 500);
        }
    }

    public function deleteNutritionPlan($id)
    {
        try {
            $user = User::find($id);
            $userNutrition = UserNutrition::where('id_user', $user->id)->first();
            $nutritionPlan = NutritionPlan::where('id_user', $user->id)->first();

            if ($userNutrition) {
                $userNutrition->delete();
            }
            if ($nutritionPlan) {
                $nutritionPlan->delete();
            }

            $user->delete();

            return response()->json(['message' => 'Nutrition plan deleted successfully']);

        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al eliminar el plan nutricional: ' . $e->getMessage()], 500);
        }
    }
}