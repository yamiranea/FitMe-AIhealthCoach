<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SportPlan;

class SportPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $plan_names = ['Aeróbico', 'Bodyweight', 'Crossfit', 'Entrenamiento de fuerza', 'HIIT (High-Intensity-Interval Training', 'Pilates', 'Stretching', 'Yoga'];
    $activity_levels = ['Bajo', 'Medio', 'Alto'];

    foreach ($plan_names as $plan_name) {
        foreach ($activity_levels as $activity_level) {
            SportPlan::factory()->create([
                'plan_name' => $plan_name,
                'activity_level' => $activity_level,
            ]);
        }
    }
}}