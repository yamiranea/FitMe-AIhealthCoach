<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = ['Mujer', 'Hombre', 'Prefiero no especificar'];

        foreach ($genders as $gender) {
        User::factory()->create([
            'gender' => $gender,
        ]);
        }
    }
}