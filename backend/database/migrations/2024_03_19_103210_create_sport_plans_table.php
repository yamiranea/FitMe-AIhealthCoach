<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSportPlansTable extends Migration
{
    public function up()
    {
        Schema::create('sport_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_user')->constrained()->onDelete('cascade');
            $table->text('plan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sport_plans');
    }
}