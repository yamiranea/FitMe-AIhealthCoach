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
        $table->id();
        $table->string('name');
        $table->integer('age');
        $table->unsignedBigInteger('id_gender');
        $table->decimal('current_weight', 5, 2);
        $table->decimal('height', 3, 2);
        $table->timestamps();

        $table->foreign('id_gender')->references('id')->on('genders');
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