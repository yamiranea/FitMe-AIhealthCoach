<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\LevelActivity;
use App\Models\SportActivity;
use App\Models\SportTag;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserSport>
 */
class UserSportFactory extends Factory
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
        'id_level_activity' => LevelActivity::all()->random()->id,
        'id_sport_activity' => SportActivity::all()->random()->id,
        'id_sport_tag' => SportTag::all()->random()->id,
        'created_date' => $this->faker->date(),
        'updated_date' => $this->faker->date(),        
    ];
    }
}