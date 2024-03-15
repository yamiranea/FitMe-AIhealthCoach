<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserSport;

class UserSportController extends Controller
{
    
    public function index()
    {
    $userSports = UserSport::all();

    return response()->json($userSports);
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'id_user' => 'required',
        'id_level_activity' => 'required',
        'id_sport_activity' => 'required',
        'id_sport_tag' => 'required',
        'created_date' => 'required',
        'updated_date' => 'required',
    ]);

    $userSport = UserSport::create($validated);

    return response()->json($userSport, 201);
}


    public function show(string $id)
{
    $userSport = UserSport::findOrFail($id);

    return response()->json($userSport);
}
   public function update(Request $request, string $id)
{
    $userSport = UserSport::findOrFail($id);

    $validated = $request->validate([
        'id_user' => 'required',
        'id_level_activity' => 'required',
        'id_sport_activity' => 'required',
        'id_sport_tag' => 'required',
        'created_date' => 'required',
        'updated_date' => 'required',
    ]);

    $userSport->fill($validated);
    $userSport->save();

    return response()->json($userSport);
}
   public function destroy(string $id)
{
    $userSport = UserSport::findOrFail($id);

    $userSport->delete();

    return response()->json(null, 204);
}
}