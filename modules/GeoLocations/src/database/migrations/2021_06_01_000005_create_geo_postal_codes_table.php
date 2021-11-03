<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeoCitiesTable extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::create('geo_postal_codes', function (Blueprint $table) {
         $table->id();
         $table->string('name');
         $table->string('type')->nullable()->default('postal');
         $table->text('keywords')->nullable();
         $table->string('latitude')->nullable();
         $table->string('longitude')->nullable();
         $table->unsignedBigInteger('geo_country_id')->nullable();
         $table->foreign('geo_country_id')->references('id')->on('geo_countries')->onDelete('cascade');
         $table->unsignedBigInteger('geo_district_id')->nullable();
         $table->foreign('geo_district_id')->references('id')->on('geo_districts')->onDelete('cascade');
         $table->unsignedBigInteger('geo_city_id')->nullable();
         $table->foreign('geo_city_id')->references('id')->on('geo_cities')->onDelete('cascade');
      });
   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('geo_postal_codes');
   }
}
