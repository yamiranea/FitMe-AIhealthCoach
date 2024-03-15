<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\NutritionalPlan;
use App\Models\NutritionalTag;

class NutritionalPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        $nutritional_plans = [
    ['name_plan' => 'Dieta cetogénica', 'description' => 'Baja en carbohidratos y alta en grasas. Promueve la cetosis, un estado metabólico que utiliza la grasa como fuente de energía principal.', 'name_nutritional_tag' => ['cetosis', 'Bajo en carbohidratos', 'Alto en grasa', 'Bajar de peso']],
    ['name_plan' => 'Dieta DASH', 'description' => 'Enfocada en reducir la presión arterial alta. Rica en frutas, verduras, cereales integrales, legumbres y productos lácteos bajos en grasa.','name_nutritional_tag' => ['Hipertension', 'Salud cardiovascular', 'Bajo en sodio', 'Frutas', 'Vegetales']],
    ['name_plan' => 'Dieta Flexitariana', 'description' => 'Principalmente vegetariana, pero permite el consumo ocasional de carne. Se basa en el consumo de frutas, verduras, cereales integrales, legumbres y frutos secos.', 'name_nutritional_tag' => ['Vegetariana', 'Saludable', 'Variada', 'Sostenible']],
    ['name_plan' => 'Dieta GOMAD', 'description' => 'Alta en proteínas y grasas, con un consumo elevado de leche entera. Diseñada para aumentar la masa muscular.', 'name_nutritional_tag' => ['Aumento masa muscular', 'Alto en proteínas', 'Alto en grasas', 'Leche entera', 'Fuerza']],
    ['name_plan' => 'Dieta IIFYM', 'description' => '"If It Fits Your Macros", se basa en el consumo de macronutrientes (proteínas, carbohidratos y grasas) en las proporciones adecuadas para alcanzar tus objetivos.', 'name_nutritional_tag' => ['Macros', 'Flexible', 'Personalizada', 'Objetivos']],
    ['name_plan' => 'Dieta para bajar de peso', 'description' => 'Reduce el consumo de calorías para crear un déficit calórico y promover la pérdida de peso. Puede ser de diferentes tipos (baja en calorías, baja en grasas, etc.).', 'name_nutritional_tag' => ['Descenso de peso', 'Déficit calórico', 'Saludable', 'Variada', 'Motivación']],
    ['name_plan' => 'Dieta para diabéticos', 'description' => 'Controla los niveles de azúcar en sangre. Se basa en el consumo de alimentos con bajo índice glucémico y fibra.', 'name_nutritional_tag' => ['Diabetes', 'Control glucémico', 'Saludable', 'Fibra', 'Planificación']],
    ['name_plan' => 'Dieta para ganar masa muscular', 'description' => 'Aumenta el consumo de calorías y proteínas para estimular el crecimiento muscular. Se suele combinar con entrenamiento de fuerza.', 'name_nutritional_tag' => ['Proteinas', 'Hipercalórica', 'Entrenamiento', 'Fuerza']],
    ['name_plan' => 'Dieta para hipertensos', 'description' => 'Similar a la dieta DASH, se enfoca en reducir la presión arterial alta. Limita el consumo de sal, grasas saturadas y alcohol.', 'name_nutritional_tag' => ['Hipertension', 'Bajo en sodio', 'Salud cardiovascular', 'Frutas', 'Verduras']],
    ['name_plan' => 'Dieta para personas con celiaquía', 'description' => 'Libre de gluten, una proteína que se encuentra en el trigo, la cebada y el centeno. Se basa en el consumo de alimentos naturalmente libres de gluten como frutas, verduras, carnes, pescados, huevos y arroz.', 'name_nutritional_tag' => ['Sin gluten', 'Saludable', 'Variada', 'Autoinmune']],
    ['name_plan' => 'Dieta mediterránea', 'description' => 'Rica en frutas, verduras, cereales integrales, legumbres, frutos secos y aceite de oliva. Se recomienda un consumo moderado de pescado y carne roja, y un bajo consumo de productos lácteos.', 'name_nutritional_tag' => ['Saludable', 'Corazón', 'Antioxidantes', 'Longevidad']],
    ];
    foreach ($nutritional_plans as $nutritional_plan) {
    $plan  = NutritionalPlan::create([
        'name_plan' => $nutritional_plan['name_plan'],
        'description' => $nutritional_plan['description'],
    ]);

    foreach ($nutritional_plan['nutritional_plan_tag'] as $tag_name) {
        $tag = NutritionalTag::firstOrCreate(['name_nutritional_tag' => $tag_name]);
        $plan->tags()->attach($tag->id);
    }
}
}}