<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserControllerTest extends TestCase
{

    public function testIndex()
    {
        // Act: Send a GET request to the /users endpoint
        $response = $this->get('/api/users');

        // Assert: Check that the response has a status of 200 and is an array
        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => ['id', 'name', 'age', 'id_gender', 'current_weight', 'height', 'created_at', 'updated_at']
        ]);
    }

    public function testStore()
    {
        // Arrange: Prepare the data for a new user
        $newUserData = [
            'name' => 'Test User',
            'age' => 30,
            'id_gender' => 1,
            'current_weight' => 70.5,
            'height' => 1.80,
        ];

        // Act: Send a POST request to the /users endpoint
        $response = $this->post('/api/users', $newUserData);

        // Assert: Check that the response has a status of 201 and contains the user data
        $response->assertStatus(201);
        $response->assertJson($newUserData);
    }

    public function testShow()
    {
        // Arrange: Create a user
        $user = User::factory()->create();

        // Act: Send a GET request to the /users/{id} endpoint
        $response = $this->get('/api/users/' . $user->id);

        // Assert: Check that the response has a status of 200 and contains the user data
        $response->assertStatus(200);
        $response->assertJson([
            'success' => true,
            'data' => $user->toArray()
        ]);
    }

    public function testUpdate()
    {
        // Arrange: Create a user and prepare the updated data
        $user = User::factory()->create();
        $updatedData = [
            'name' => 'Updated User',
            'age' => 35,
            'id_gender' => 2,
            'current_weight' => 75.5,
            'height' => 1.95,
        ];

        // Act: Send a PUT request to the /users/{id} endpoint
        $response = $this->put('/api/users/' . $user->id, $updatedData);

        // Assert: Check that the response has a status of 200 and contains the updated data
        $response->assertStatus(200);
        $response->assertJson($updatedData);
    }

    public function testDestroy()
    {
        // Arrange: Create a user
        $user = User::factory()->create();

        // Act: Send a DELETE request to the /users/{id} endpoint
        $response = $this->delete('/api/users/' . $user->id);

        // Assert: Check that the response has a status of 204
        $response->assertStatus(204);

        // Assert: Check that the user was deleted
        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }
}