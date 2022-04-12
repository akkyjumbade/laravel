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
      Schema::create('navigations', function (Blueprint $table) {
         $table->id();
         $table->string('title');
         $table->string('name')->nullable();
         $table->string('url');
         $table->string('description')->nullable();
         $table->string('group')->default('primary');
         $table->string('css_class')->default('admin_only');
         $table->foreignId('parent_id')->nullable()->references('id')->on($table->getTable())->cascadeOnDelete();
         $table->unsignedBigInteger('order_index')->nullable()->comment('Order index');
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
      Schema::dropIfExists('navigations');
   }
};
