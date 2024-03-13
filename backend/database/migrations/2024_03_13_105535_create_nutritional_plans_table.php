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
        Schema::create('nutritional_plans', function (Blueprint $table) {
            $table->id('id_plan');
            $table->text('description');
            $table->string('diet_type', 255);
            $table->decimal('current_weight', 5, 2);
            $table->integer('creation_user');
            $table->integer('updated_user');
            $table->dateTime('creation_date');
            $table->dateTime('updated_date');
        });
    }
};