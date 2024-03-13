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
   Schema::create('sport_plans', function (Blueprint $table) {
        $table->id('id_plan');
        $table->string('plan_name', 255)->nullable();
        $table->text('description')->nullable();
        $table->string('activity_level', 255)->nullable();
        $table->dateTime('creation_date')->nullable();
        $table->dateTime('updated_date')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sport_plans');
    }
};