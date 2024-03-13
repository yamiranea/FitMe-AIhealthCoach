<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SportPlan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'sport_plans';

    protected $fillable = [
        'plan_name',
        'description',
        'activity_level',
        'creation_user',
        'updated_user',
        'creation_date',
        'updated_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}