<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('name', 255)->nullable(false);
            $table->integer('age')->nullable(false);
            $table->string('gender', 25)->nullable(false);
            $table->decimal('current_weight', 5, 2)->nullable(false);
            $table->integer('height');
            $table->dateTime('updated_date');
            $table->unsignedBigInteger('id_nutritional_plan');
            $table->unsignedBigInteger('id_sport_plan');

            $table->foreign('id_nutritional_plan')->references('id_plan')->on('nutritional_plans');
            $table->foreign('id_sport_plan')->references('id_plan')->on('sport_plans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};