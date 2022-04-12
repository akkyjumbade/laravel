<?php

use Admin\Models\Tag;
use App\Models\User;
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
      Schema::create('tags', function (Blueprint $table) {
         $table->id();
         $table->string('name')->nullable();
         $table->foreignIdFor(User::class, 'user_id');
         $table->timestampsTz();
      });
      Schema::create('taggables', function (Blueprint $table) {
         $table->id();
         $table->foreignIdFor(Tag::class);
         $table->morphs('taggable');
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
      Schema::dropIfExists('taggables');
      Schema::dropIfExists('tags');
   }
};
