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
    $activity_levels = ['Bajo', 'Medio', 'Alto'];
    $plan_names = ['Aeróbico', 'Bodyweight', 'Crossfit', 'Entrenamiento de fuerza', 'HIIT (High-Intensity-Interval Training', 'Pilates', 'Stretching', 'Yoga'];

    return [
        'plan_name' => $this->faker->randomElement($plan_names), // Genera un nombre de plan aleatorio
        'description' => $this->faker->text,
        'activity_level' => $this->faker->randomElement($activity_levels), // Genera un nivel de actividad aleatorio
        'creation_user' => $this->faker->randomNumber(),
        'updated_user' => $this->faker->randomNumber(),
        'creation_date' => $this->faker->dateTime,
        'updated_date' => $this->faker->dateTime,
    ];
}}