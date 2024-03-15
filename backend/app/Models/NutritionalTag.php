<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionalTag extends Model
{
    use HasFactory;
    protected $fillable = ['name_nutritional_tag'];

     public function plans()
{
    return $this->belongsToMany(NutritionalPlan::class, 'nutritional_plan_tag');
}

}