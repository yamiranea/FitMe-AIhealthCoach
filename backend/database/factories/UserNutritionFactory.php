<?php

namespace Database\Factories;

use App\Models\NutritionalPlan;
use App\Models\NutritionalTag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserNutrition>
 */
class UserNutritionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
        'id_user' => User::factory(),
        'id_nutritional_plan' => NutritionalPlan::all()->random()->id,
        'id_nutritional_tag' => NutritionalTag::all()->random()->id,
        'created_date' => $this->faker->date(),
        'updated_date' => $this->faker->date(),        
    ];
    }
}