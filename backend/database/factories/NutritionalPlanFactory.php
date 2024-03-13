<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NutritionalPlan>
 */
class NutritionalPlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->text,
            'current_weight' => $this->faker->randomFloat(2, 50, 100),
            'creation_user' => $this->faker->randomNumber(),
            'updated_user' => $this->faker->randomNumber(),
            'creation_date' => $this->faker->dateTime,
            'updated_date' => $this->faker->dateTime,
        ];
    }
}