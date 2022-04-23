<?php

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
      Schema::create('activity_logs', function (Blueprint $table) {
         $table->id();
         $table->string('action');
         $table->string('intent')->nullable();
         $table->longText('request')->nullable();
         $table->longText('payload')->comment('All data while performed action')->nullable();
         $table->foreignId('actor_user_id')->nullable()->references('id')->on('users')->constrained()->nullOnDelete();
         $table->longText('session_data')->nullable();
         $table->integer('attempts')->default(0);
         $table->string('flag')->nullable();
         $table->timestampsTz();
      });
      Schema::create('statuses', function (Blueprint $table) {
         $table->id();
         $table->string('code');
         $table->string('description')->nullable();
         $table->string('color')->default('#ccc');
         $table->morphs('statusable');
         $table->foreignIdFor(User::class, 'created_by_user_id')->nullable()->references('id')->on('users')->nullOnDelete();
         $table->longText('payload')->nullable();
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
      Schema::dropIfExists('activity_logs');
      Schema::dropIfExists('statuses');
   }
};
