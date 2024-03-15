<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LevelActivity;

class LevelActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $level_activities = ['Bajo', 'Moderado', 'Alto'];

        foreach ($level_activities as $level_activity) {
            LevelActivity::create(['name_level' => $level_activity]);
        }
}
}