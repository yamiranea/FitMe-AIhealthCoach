<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserNutrition extends Model
{
    use HasFactory;
    protected $fillable = ['id_user', 'id_nutritional_plan', 'id_nutritional_tag', 'created_date', 'updated_date'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function nutritionalPlan()
    {
        return $this->belongsTo(NutritionalPlan::class, 'id_nutritional_plan');
    }

    public function nutritionTag()
    {
        return $this->belongsTo(NutritionalTag::class, 'id_nutrition_tag');
    }
}