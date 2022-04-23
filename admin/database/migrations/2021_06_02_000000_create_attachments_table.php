<?php

use Admin\Models\Attachment;
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
      Schema::create('attachments', function (Blueprint $table) {
         $table->id();
         $table->string('name')->nullable();
         $table->string('description')->nullable();
         $table->string('mime_type')->nullable();
         $table->string('drive')->default('local');
         $table->string('dir')->default('uploads');
         $table->text('original_url')->nullable();
         $table->string('color')->default('#000');
         $table->longText('meta')->nullable();
         $table->timestampTz('published_at')->nullable();
         $table->softDeletesTz();
         $table->timestampsTz();
      });
      Schema::create('attachables', function (Blueprint $table) {
         $table->id();
         $table->foreignIdFor(Attachment::class)->constrained();
         $table->morphs('attachable');
         $table->bigInteger('order_index')->default(999);
         $table->boolean('is_featured')->default(0);
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
      Schema::dropIfExists('attachments');
   }
};
