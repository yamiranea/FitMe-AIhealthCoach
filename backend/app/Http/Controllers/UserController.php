<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return response()->json($users);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'id_gender' => 'required',
            'current_weight' => 'required',
            'height' => 'required',
        ]);

        $user = User::create($validated);

        return response()->json($user, 201);
    }

    public function update(Request $request, string $id)
{
    try {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required',
            'age' => 'required',
            'id_gender' => 'required',
            'current_weight' => 'required',
            'height' => 'required',
        ]);

        $user->fill($validated);
        $user->save();

        return response()->json($user);
    } catch (ModelNotFoundException $e) {
        return response()->json(['message' => 'User not found'], 404);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Something went wrong, please try again later'], 500);
    }
}

   public function destroy(string $id)
{
    try {
        $user = User::findOrFail($id);

        $user->delete();

        return response()->json(null, 204);
    } catch (ModelNotFoundException $e) {
        return response()->json(['message' => 'User not found'], 404);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Something went wrong, please try again later'], 500);
    }
}}