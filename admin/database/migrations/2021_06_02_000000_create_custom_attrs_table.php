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
      Schema::create('custom_attrs', function (Blueprint $table) {
         $table->id();
         $table->string('name');
         $table->string('label');
         $table->string('fieldset')->default('attrs');
         $table->string('type')->default('text');
         $table->string('data_type')->default('string');
         $table->string('thumbnail')->nullable();
         $table->string('icon')->nullable();
         $table->longText('data')->nullable();
         $table->bigInteger('order_index')->nullable();
         $table->longText('extra')->nullable();
         $table->boolean('is_autoload')->default(false);
         $table->foreignId('parent_id')->nullable()->references('id')->on('custom_attrs')->cascadeOnDelete();
         // $table->morphs('custom_attrsable_id');
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
      Schema::dropIfExists('custom_attrs');
   }
};
