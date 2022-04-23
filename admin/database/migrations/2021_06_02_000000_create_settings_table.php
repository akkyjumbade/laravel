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
         $table->string('type')->default('text');
         $table->longText('value')->nullable();
         $table->longText('default_value')->nullable();
         $table->string('fieldset')->default('options');
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
