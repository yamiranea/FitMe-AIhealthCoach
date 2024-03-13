<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NutritionalPlan extends Model
{
    use HasFactory;

    protected $table = 'nutritional_plans';

    protected $fillable = [
        'description',
        'diet_type',
        'current_weight',
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