<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserControllerTest extends TestCase
{
    public function testIndex()
    {
        $response = $this->get('/api/users');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => ['id', 'name', 'age', 'id_gender', 'current_weight', 'height', 'created_at', 'updated_at']
        ]);
    }

    public function testStore()
    {
        $newUserData = [
            'name' => 'Test User',
            'age' => 30,
            'id_gender' => 1,
            'current_weight' => 70.5,
            'height' => 1.80,
        ];

        $response = $this->post('/api/users', $newUserData);

        $response->assertStatus(201);
        $response->assertJson($newUserData);

        $this->assertDatabaseHas('user_sports', ['id_user' => $response->json('id')]);
        $this->assertDatabaseHas('user_nutrition', ['id_user' => $response->json('id')]);
    }

    public function testShow()
    {
        $user = User::factory()->create();

        $response = $this->get('/api/users/' . $user->id);

        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'data' => $user->toArray()
        ]);
    }

    public function testUpdate()
    {
        $user = User::factory()->create();
        $updatedData = [
            'name' => 'Updated User',
            'age' => 35,
            'id_gender' => 2,
            'current_weight' => 75.5,
            'height' => 1.95,
        ];

        $response = $this->put('/api/users/' . $user->id, $updatedData);

        $response->assertStatus(200);
        $response->assertJson($updatedData);
    }

    public function testDestroy()
    {
        $user = User::factory()->create();

        $response = $this->delete('/api/users/' . $user->id);

        $response->assertStatus(204);

        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}