<?php

namespace App\Http\Controllers;

use App\Models\UserNutrition;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserNutritionController extends Controller
{
    public function index()
    {
        try {
            $userNutritions = UserNutrition::all();
            return response()->json($userNutritions);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong, please try again later'], 500);
        }
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'id_user' => 'required',
                'id_nutritional_plan' => 'required',
                'id_nutritional_tag' => 'required',
                'created_date' => 'required',
                'updated_date' => 'required',
            ]);

            $userNutrition = UserNutrition::create($validated);

            return response()->json($userNutrition, 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong, please try again later'], 500);
        }
    }

    public function show(string $id)
    {
        try {
            $userNutrition = UserNutrition::findOrFail($id);
            return response()->json($userNutrition);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'UserNutrition not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong, please try again later'], 500);
        }
    }

    public function update(Request $request, string $id)
    {
        try {
            $userNutrition = UserNutrition::findOrFail($id);

            $validated = $request->validate([
                'id_user' => 'required',
                'id_nutritional_plan' => 'required',
                'id_nutritional_tag' => 'required',
                'created_date' => 'required',
                'updated_date' => 'required',
            ]);

            $userNutrition->fill($validated);
            $userNutrition->save();

            return response()->json($userNutrition);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'UserNutrition not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong, please try again later'], 500);
        }
    }

    public function destroy(string $id)
    {
        try {
            $userNutrition = UserNutrition::findOrFail($id);

            $userNutrition->delete();

            return response()->json(null, 204);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => 'UserNutrition not found'], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong, please try again later'], 500);
        }
    }
}