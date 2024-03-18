<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserSport;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class SportPlanController extends Controller
{
    public function createSportPlan(Request $request, string $userId)
    {
        try {
            $user = User::findOrFail($userId);
            $userSport = UserSport::where('id_user', $userId)->first();

            if (!$userSport) {
                throw new ModelNotFoundException('UserSport not found');
            }

            $iaResponse = $this->sendDataToIA([
                'user' => $user,
                'userSport' => $userSport,
            ]);


            return response()->json($iaResponse);
        } catch (ModelNotFoundException $e) {
            return response()->json(['message' => $e->getMessage()], 404);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Something went wrong, please try again later'], 500);
        }
    }

    private function sendDataToIA($data)
    {
        // Aquí es donde enviarías los datos a la IA.
        // Este es solo un ejemplo y necesitarías reemplazarlo con el código real para enviar los datos a la IA.
        $iaApiUrl = "https://ia.example.com/api";
        $response = Http::post($iaApiUrl, $data);

        if ($response->successful()) {
            return $response->json();
        } else {
            throw new \Exception('Failed to send data to IA');
        }
    }
}