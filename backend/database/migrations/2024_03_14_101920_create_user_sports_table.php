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
        Schema::create('user_sports', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('id_user');
        $table->unsignedBigInteger('id_level_activity');
        $table->unsignedBigInteger('id_sport_activity');
        $table->unsignedBigInteger('id_sport_tag');
        $table->date('created_date');
        $table->date('updated_date');
        $table->timestamps();

        $table->foreign('id_user')->references('id')->on('users');
        $table->foreign('id_level_activity')->references('id')->on('level_activities');
        $table->foreign('id_sport_activity')->references('id')->on('sport_activities');
        $table->foreign('id_sport_tag')->references('id')->on('sport_tags');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_sports');
    }
};