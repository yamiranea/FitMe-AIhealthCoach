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
   Schema::create('nutritional_plan_tag', function (Blueprint $table) {
   $table->id();
   $table->foreignId('nutritional_plan_id')->constrained();
   $table->foreignId('nutritional_tag_id')->constrained();
   $table->timestamps();
});
   }


   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('nutritional_plan_tag');
   }
};