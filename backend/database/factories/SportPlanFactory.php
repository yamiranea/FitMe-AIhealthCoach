<?php

namespace Database\Factories;

use App\Models\SportPlan;
use Illuminate\Database\Eloquent\Factories\Factory;

class SportPlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SportPlan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
   public function definition(): array
{
    return [
        'description' => $this->faker->text,
        'creation_date' => $this->faker->dateTime,
        'updated_date' => $this->faker->dateTime,
    ];
}}