<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'name',
        'age',
        'gender',
        'current_weight',
        'height',
        'updated_date',
        'id_nutritional_plan',
        'id_sport_plan',
    ];

    public function nutritionalPlan()
    {
        return $this->hasOne(NutritionalPlan::class, 'ID_plan', 'id_nutritional_plan');
    }

    public function sportPlan()
    {
        return $this->hasOne(SportPlan::class, 'id_plan', 'id_sport_plan');
    }
}