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
      Schema::create('contact_forms', function (Blueprint $table) {
         $table->id();
         $table->string('name');
         $table->string('email')->nullable();
         $table->string('phone_number')->nullable()->comment('Store with country code');
         $table->date('birth_date')->nullable();
         $table->string('business_name')->nullable();
         $table->string('incorporated_date')->nullable();
         $table->string('city_of_operations')->nullable();
         $table->string('business_stage')->nullable();
         $table->unsignedBigInteger('business_service_years')->nullable();
         $table->string('last_year_business_turnover')->nullable();
         $table->longText('description')->nullable();
         $table->foreignId('educational_qualification_attachment_id')->nullable()->constrained('attachments')->cascadeOnDelete();
         $table->foreignId('intro_video_attachment_id')->nullable()->constrained('attachments')->cascadeOnDelete();
         $table->longText('photos')->comment('Store id of attachments');
         $table->longText('kyc_attachments')->comment('Store id of attachments');
         $table->longText('office_address');
         $table->longText('residential_address');
         $table->longText('extra');
         // $table->foreignId('owner_user_id')->references('id')->on('users')->constrained()->cascadeOnDelete();
         $table->timestampTz('replied_at')->nullable();
         // $table->timestampTz('replied_at')->nullable();
         $table->softDeletesTz();
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
      Schema::dropIfExists('contact_forms');
   }
};
