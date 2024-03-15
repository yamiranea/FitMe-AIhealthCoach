<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LevelActivitySeeder::class);
        $this->call(NutritionalPlanSeeder::class);
        $this->call(SportActivitySeeder::class);

    }
}