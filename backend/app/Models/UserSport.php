<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSport extends Model
{
    use HasFactory;

      protected $fillable = ['id_user', 'id_level_activity', 'id_sport_activity', 'id_sport_tag','created_date', 'updated_date'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function level_activity()
    {
        return $this->belongsTo(LevelActivity::class, 'id_level_activity');
    }

    public function sport_activity()
    {
        return $this->belongsTo(SportActivity::class, 'id_sport_activity');
    }

    public function sport_tag()
    {
        return $this->belongsTo(SportTag::class, 'id_sport_tag');
    }
}