<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeoDistrictsTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('geo_districts', function (Blueprint $table) {
         $table->id();
         $table->string('name');
         $table->string('native_name')->nullable();
         $table->string('capital')->nullable();
         $table->string('type')->nullable();
         $table->string('state_code')->nullable();
         $table->string('latitude')->nullable();
         $table->string('longitude')->nullable();
         $table->unsignedBigInteger('geo_province_id')->nullable();
         $table->foreign('geo_province_id')->references('id')->on('geo_provinces')->onDelete('cascade');
         $table->unsignedBigInteger('geo_country_id')->nullable();
         $table->foreign('geo_country_id')->references('id')->on('geo_countries')->onDelete('cascade');
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('geo_districts');
   }
}
