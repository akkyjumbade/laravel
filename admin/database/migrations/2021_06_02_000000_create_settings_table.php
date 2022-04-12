<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('settings', function (Blueprint $table) {
         $table->id();
         $table->string('name');
         $table->string('label');
         $table->string('type')->default('text');
         $table->string('description')->nullable();
         $table->string('input_component')->default('TextInput');
         $table->string('output_component')->default('View');
         $table->longText('value')->nullable();
         $table->longText('default_value')->nullable();
         $table->string('fieldset')->nullable();
         $table->boolean('is_autoload')->default(false);
         $table->timestampsTz();
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('settings');
   }
};
