<?php

namespace Database\Factories;

use App\Models\User;
Use App\Models\Gender;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(16, 100),
            'id_gender' => Gender::all()->random()->id,
            'current_weight' => $this->faker->randomFloat(2, 40, 200),
            'height' => $this->faker->randomFloat(2, 1.00, 3.00),
         ];
    }
}