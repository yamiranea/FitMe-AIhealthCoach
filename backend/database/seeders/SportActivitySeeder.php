<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SportTag;
use App\Models\SportActivity;

class SportActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sport_activities = [
    ['name_activity' => 'Aeróbico', 'description' => 'Mejora la salud cardiovascular, pulmonar y muscular. Aumenta la resistencia y quema calorías.', 'tags' => ['Cardio', 'Resistencia', 'Salud Cardiovascular', 'Practica donde quieras']],
    ['name_activity' => 'Bodyweight', 'description' => 'Fortalece el cuerpo utilizando el propio peso corporal como resistencia. No requiere equipamiento.','tags' => ['No equipment', 'Fuerza corporal', 'Definición muscular', 'Entrenamiento funcional']],
    ['name_activity' => 'Crossfit', 'description' => 'Entrenamiento de alta intensidad que combina diferentes disciplinas. Mejora la fuerza, resistencia cardiovascular y coordinación.', 'tags' => ['Equipamiento necesario', 'Alta intensidad', 'Desafiante', 'En casa o en un box']],
    ['name_activity' => 'Entrenamiento de fuerza', 'description' => 'Desarrolla la masa muscular, aumenta la fuerza y la densidad ósea.', 'tags' => ['Hipertrofia', 'Fuerza', 'Musculación', 'Equipamiento necesario']],
    ['name_activity' => 'HIIT (High-Intensity-Interval-Training', 'description' => 'Entrenamiento interválico de alta intensidad que alterna períodos de ejercicio intenso con otros de descanso. Quema calorías en poco tiempo.', 'tags' => ['Intervalos intnsos', 'Entrenamiento corto', 'Quema calorías', 'Equipamiento opcional']],
    ['name_activity' => 'Pilates', 'description' => 'Fortalece el core, mejora la flexibilidad y la postura corporal.'],
    ['name_activity' => 'Stretching', 'description' => 'Mejora la flexibilidad y el rango de movimiento articular. Reduce la tensión muscular.', 'tags' => ['Flexibilidad', 'Recuperación', 'Prevención de lesiones', 'Equipamiento mínimo (esterilla)']],
    ['name_activity' => 'Yoga', 'description' => 'Mejora la flexibilidad, la fuerza, el equilibrio y la postura corporal. Reduce el estrés y la ansiedad.', 'tags' => ['Flexibilidad', 'Fuerza', 'Equilibrio', 'Meditación']],
        ];

    foreach ($sport_activities as $sport_activity) {
    $activity = SportActivity::create([
        'name_activity' => $sport_activity['name_activity'],
        'description' => $sport_activity['description'],
    ]);

    foreach ($sport_activity['tags'] as $tag_name) {
        $tag = SportTag::firstOrCreate(['name_sport_tag' => $tag_name]);
        $activity->tags()->attach($tag->id);
    }
}
}}