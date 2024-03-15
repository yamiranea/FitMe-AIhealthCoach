<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionalPlan extends Model
{
    use HasFactory;
    protected $fillable = ['name_plan', 'description'];

    public function tags()
    {
    return $this->belongsToMany(NutritionalTag::class, 'nutritional_plan_tag');
    }
}