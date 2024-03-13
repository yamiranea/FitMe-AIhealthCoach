<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 100),
            'current_weight' => $this->faker->randomFloat(2, 50, 100),
            'height' => $this->faker->numberBetween(150, 200),
            'updated_date' => $this->faker->dateTime,
            'id_nutritional_plan' => $this->faker->randomNumber(),
            'id_sport_plan' => $this->faker->randomNumber(),
        ];
    }
}