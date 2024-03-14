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
        Schema::create('user_nutrition', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_user');
        $table->unsignedBigInteger('id_nutritional_plan');
        $table->unsignedBigInteger('id_nutrition_tag');
        $table->date('created_date');
        $table->date('updated_date');
        $table->timestamps();

        $table->foreign('id_user')->references('id')->on('users');
        $table->foreign('id_nutritional_plan')->references('id')->on('nutritional_plans');
        $table->foreign('id_nutrition_tag')->references('id')->on('nutritional_tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_nutrition');
    }
};