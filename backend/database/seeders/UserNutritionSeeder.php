<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserNutrition;
use App\Models\NutritionalPlan;
use Illuminate\Database\Seeder;

class UserNutritionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function (User $user) {
            $nutritionalPlan = NutritionalPlan::with('tags')->get()->random();
            $nutritionalTag = $nutritionalPlan->tags->random();

            UserNutrition::factory()->create([
                'id_user' => $user->id,
                'id_nutritional_plan' => $nutritionalPlan->id,
                'id_nutritional_tag' => $nutritionalTag->id,
            ]);
        });
    }
}