<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserSport;
use App\Models\LevelActivity;
use App\Models\SportActivity;
use App\Models\SportTag;
use Illuminate\Database\Seeder;

class UserSportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $levelActivities = LevelActivity::all();
        $sportActivities = SportActivity::all();
        $sportTags = SportTag::all();

        User::all()->each(function (User $user) use ($levelActivities, $sportActivities, $sportTags) {
            UserSport::factory()->create([
                'id_user' => $user->id,
                'id_level_activity' => $levelActivities->random()->id,
                'id_sport_activity' => $sportActivities->random()->id,
                'id_sport_tag' => $sportTags->random()->id,
            ]);
        });
    }
}