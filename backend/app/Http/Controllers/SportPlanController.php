<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\User;
use App\Models\UserSport;
use App\Models\LevelActivity;
use App\Models\SportActivity;
use App\Models\Gender;
use App\Models\SportPlan;


class SportPlanController extends Controller
{
    private $openAIController;

    public function __construct(OpenAIController $openAIController)
    {
        $this->openAIController = $openAIController;
    }

    public function createSportPlan(Request $request)
    {
        try { $validated = $request->validate([
        'name' => 'required',
        'age' => 'required',
        'id_gender' => 'required',
        'current_weight' => 'required',
        'height' => 'required',
        'id_level_activity' => 'required',
        'id_sport_activity' => 'required',
]);

    $user = User::create($validated);

    $gender = Gender::find($validated['id_gender']);
    $levelActivity = LevelActivity::find($validated['id_level_activity']);
    $sportActivity = SportActivity::find($validated['id_sport_activity']);
    if (!$sportActivity) {
    return response()->json(['message' => 'La actividad deportiva seleccionada no existe'], 400);
    }

    if ($sportActivity->tags->isEmpty()) {
        return response()->json(['message' => 'La actividad deportiva seleccionada no tiene tags asociadas'], 400);
    }
    
    $id_sport_tag = $sportActivity->tags->random()->id;
    
    UserSport::create([
        'id_user' => $user->id,
        'id_level_activity' => $validated['id_level_activity'],
        'id_sport_activity' => $validated['id_sport_activity'],
        'id_sport_tag' => $id_sport_tag,
        'created_date' => date('Y-m-d'),
        'updated_date' => date('Y-m-d')
    ]);


        $message = "Conviértete en mi coach deportivo experto y crea un plan deportivo para una persona de {$validated['age']} años, género {$gender->description}, peso actual {$validated['current_weight']}, altura {$validated['height']} con un nivel de actividad {$levelActivity->description} y el tipo de actividad deportiva deseada es {$sportActivity->description}. Por favor no incluyas encabezados, de saludo, solamente retorna el plan con la siguiente información: Objetivos del plan deportivo: 1,2,3,4 etc. Plan de entrenamiento (Frecuencia, Duración de las sesiones, Calentamiento, Entrenamiento, Enfriamiento. Consideraciones adicionales: 1,2,3... etc. También incluye el IMC. La información debe ser clara y precisa, presentada en formato de lista con viñetas y números para una lectura más fácil. Gracias.";
        $iaResponse = $this->openAIController->sendMessage($message);

        SportPlan::create([
            'id_user' => $user->id,
            'plan' => $iaResponse,
        ]);

        return response()->json(['plan' => $iaResponse]);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Error al crear el plan deportivo: ' . $e->getMessage()], 500);
    }
}
   

    public function updateSportPlan(Request $request, $id)
    {
        try {
        $user = User::find($id);
        $userSport = UserSport::where('id_user', $user->id)->first();
        $sportPlan = SportPlan::where('id_user', $user->id)->first();

        $user->fill($request->all());
        $userSport->fill($request->all());
        $sportPlan->fill($request->all());

        $user->save();
        $userSport->save();
        $sportPlan->save();

        return response()->json(['message' => 'Sport plan updated successfully']);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Error al actualizar el plan deportivo: ' . $e->getMessage()], 500);
    }
}

    public function deleteSportPlan($id)
    {
        try {
        $user = User::find($id);
        $userSport = UserSport::where('id_user', $user->id)->first();
        $sportPlan = SportPlan::where('id_user', $user->id)->first();

        $user->delete();
        $userSport->delete();
        $sportPlan->delete();

        return response()->json(['message' => 'Sport plan deleted successfully']);

        } catch (\Exception $e) {
        return response()->json(['message' => 'Error al eliminar el plan deportivo: ' . $e->getMessage()], 500);
    }
    }
}