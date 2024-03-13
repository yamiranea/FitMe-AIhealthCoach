<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NutritionalPlan;

class NutritionalPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $diet_types = [
            'Dieta cetogénica',
            'Dieta DASH',
            'Dieta flexitariana',
            'Dieta GOMAD',
            'Dieta IIFYM',
            'Dieta para bajar de peso',
            'Dieta para diabéticos',
            'Dieta para ganar masa muscular',
            'Dieta para hipertensos',
            'Dieta para personas con celiaquía',
            'Dieta mediterránea',
            'Dieta paleo',
            'Dieta vegana',
            'Dieta vegetariana'
        ];

        foreach ($diet_types as $diet_type) {
        NutritionalPlan::factory()->create([
            'diet_type' => $diet_type,
        ]);
    }
    }
}