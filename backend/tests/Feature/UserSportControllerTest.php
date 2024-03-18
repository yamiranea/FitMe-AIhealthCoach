<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\UserSport;

class UserSportControllerTest extends TestCase
{

    public function testIndex()
    {
        $response = $this->get('/api/user_sports');

        $response->assertStatus(200);
        $response->assertJsonStructure([
            '*' => ['id', 'id_user', 'id_level_activity', 'id_sport_activity', 'id_sport_tag', 'created_date', 'updated_date', 'created_at', 'updated_at']
        ]);
    }

public function testStore()
{
    $newUserSportData = [
        'id_user' => 49,
        'id_level_activity' => 1,
        'id_sport_activity' => 1,
        'id_sport_tag' => 1,
        'created_date' => now()->toDateTimeString(),
        'updated_date' => now()->toDateTimeString(),
    ];

    $response = $this->post('/api/user_sports', $newUserSportData);

    $response->assertStatus(201);
    $response->assertJson([
        'id_user' => 49,
        'id_level_activity' => 1,
        'id_sport_activity' => 1,
        'id_sport_tag' => 1,
        'created_date' => now()->toDateTimeString(),
        'updated_date' => now()->toDateTimeString(),
    ]);
}
    

    public function testShow()
    {
        $userSport = UserSport::factory()->create();

        $response = $this->get('/api/user_sports/' . $userSport->id);

        $response->assertStatus(200);
        $response->assertJson([
        'id' => $userSport->id,
        'id_user' => $userSport->id_user,
        'id_level_activity' => $userSport->id_level_activity,
        'id_sport_activity' => $userSport->id_sport_activity,
        'id_sport_tag' => $userSport->id_sport_tag,
        'created_date' => $userSport->created_date->toDateString(),
        'updated_date' => $userSport->updated_date->toDateString(),
        'created_at' => $userSport->created_at->toJSON(),
        'updated_at' => $userSport->updated_at->toJSON(),
        ]);  
}

public function testUpdate()
{
    $userSport = UserSport::factory()->create();
    $updatedData = [
        'id_user' => 42,
        'id_level_activity' => 3,
        'id_sport_activity' => 7,
        'id_sport_tag' => 22,
        'created_date' => '2024-03-18',
        'updated_date' => '2024-03-18'
    ];

    $response = $this->put('/api/user_sports/' . $userSport->id, $updatedData);

    $response->assertStatus(200);
    $response->assertJson([
        'id_user' => 42,
        'id_level_activity' => 3,
        'id_sport_activity' => 7,
        'id_sport_tag' => 22,
        'created_date' => '2024-03-18',
        'updated_date' => '2024-03-18'
    ]);
    }

    public function testDestroy()
    {
        $userSport = UserSport::factory()->create();

        $response = $this->delete('/api/user_sports/' . $userSport->id);

        $response->assertStatus(204);

        $this->assertDatabaseMissing('user_sports', ['id' => $userSport->id]);
    }
}