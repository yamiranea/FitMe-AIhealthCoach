<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age', 'id_gender', 'current_weight', 'height'];

    public function gender()
    {
        return $this->belongsTo(Gender::class, 'id_gender');
    }
}