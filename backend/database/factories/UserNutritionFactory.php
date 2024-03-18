<?php

namespace Database\Factories;

use App\Models\NutritionalPlan;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserNutritionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nutritionalPlan = NutritionalPlan::with('tags')->get()->random();

        return [
            'id_user' => User::factory(),
            'id_nutritional_plan' => $nutritionalPlan->id,
            'id_nutritional_tag' => $nutritionalPlan->tags->random()->id,
            'created_date' => now(),
            'updated_date' => now(),   
        ];
    }
}