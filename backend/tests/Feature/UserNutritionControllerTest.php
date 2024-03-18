<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\UserNutrition;

class UserNutritionControllerTest extends TestCase
{

    public function testIndex()
    {
        $response = $this->get('api/user_nutritions');
        $response->assertStatus(200);
    }

   public function testStore()
{
    $newUserNutritionData = [
        'id_user' => 17,
        'id_nutritional_plan' => 1,
        'id_nutritional_tag' => 1,
        'created_date' => '2024-03-01',
        'updated_date' => '2024-03-18'
    ];

    $response = $this->post('api/user_nutritions', $newUserNutritionData);
    $response->assertStatus(201);
    $response->assertJson([
        'id_user' => 17,
        'id_nutritional_plan' => 1,
        'id_nutritional_tag' => 1,
        'created_date' => '2024-03-01',
        'updated_date' => '2024-03-18'
    ]);
}

    public function testShow()
    {
        $userNutrition = UserNutrition::factory()->create();

        $response = $this->get('api/user_nutritions/' . $userNutrition->id);
        $response->assertStatus(200);
        // ...
    }

   public function testUpdate()
{
    $userNutrition = UserNutrition::factory()->create();

    $updatedData = [
        'id_user' => 2,
        'id_nutritional_plan' => 2,
        'id_nutritional_tag' => 2,
        'created_date' => '2022-02-02',
        'updated_date' => '2022-02-02',
    ];

    $response = $this->put('api/user_nutritions/' . $userNutrition->id, $updatedData);
    $response->assertStatus(200);
    $response->assertJson($updatedData);
}

    public function testDestroy()
    {
        $userNutrition = UserNutrition::factory()->create();

        $response = $this->delete('api/user_nutritions/' . $userNutrition->id);
        $response->assertStatus(204);
    }
}