<?php

use Admin\Models\Attachment;
use Admin\Models\Tag;
use Admin\Models\Taxonomy;
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
      Schema::create('statuses', function (Blueprint $table) {
         $table->id();
         $table->string('code');
         $table->string('description')->nullable();
         $table->string('color')->default('#ccc');
         $table->morphs('statusable');
         $table->foreignId('created_by_user_id')->constrained('users', 'id')->cascadeOnDelete();
         $table->longText('payload')->nullable();
         $table->timestampsTz();
      });
      Schema::create('attachments', function (Blueprint $table) {
         $table->id();
         $table->string('name');
         $table->string('title')->nullable();
         $table->string('alt_text')->nullable();
         $table->string('citation')->nullable();
         $table->string('description')->nullable();
         $table->string('mime_type')->nullable();
         $table->string('drive')->default('local');
         $table->string('path')->default('uploads');
         $table->text('url')->nullable();
         $table->string('color')->default('#000');
         $table->longText('meta')->nullable();
         $table->timestampTz('published_at')->nullable();
         $table->foreignId('created_by_user_id')->constrained('users', 'id')->nullOnDelete();
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
      Schema::create('taxonomies', function (Blueprint $table) {
         $table->id();
         $table->string('title');
         $table->string('slug');
         $table->text('excerpt')->nullable();
         $table->longText('description')->nullable();
         $table->foreignId('thumbnail_id')->nullable()->constrained('attachments')->nullOnDelete();
         $table->foreignId('icon_id')->nullable()->constrained('attachments')->nullOnDelete();
         $table->foreignId('parent_id')->nullable()->constrained($table->getTable(), 'id')->cascadeOnDelete();
         $table->timestampsTz();
         $table->softDeletesTz();
      });
      Schema::create('terms', function (Blueprint $table) {
         $table->id();
         $table->string('title');
         $table->string('slug');
         $table->foreignId('taxonomy_id')->constrained('taxonomies', 'id')->cascadeOnDelete();
         $table->foreignId('thumbnail_id')->nullable()->constrained('attachments', 'id')->nullOnDelete();
         $table->foreignId('icon_id')->nullable()->constrained('attachments', 'id')->nullOnDelete();
         $table->text('excerpt')->nullable();
         $table->longText('description')->nullable();
         $table->foreignId('parent_id')->nullable()->constrained($table->getTable(), 'id')->cascadeOnDelete();
         $table->timestampsTz();
         $table->softDeletesTz();
      });
      Schema::create('termables', function (Blueprint $table) {
         $table->id();
         $table->foreignId('term_id')->constrained('terms', 'id')->cascadeOnDelete();
         $table->morphs('termable');
      });
      Schema::create('tags', function (Blueprint $table) {
         $table->id();
         $table->string('name')->nullable();
         $table->foreignId('user_id')->nullable()->constrained('users', 'id')->cascadeOnDelete();
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
      Schema::dropIfExists('statuses');
      Schema::dropIfExists('terms');
      Schema::dropIfExists('termables');
      Schema::dropIfExists('settings');
      Schema::dropIfExists('attachables');
      Schema::dropIfExists('attachments');
      Schema::dropIfExists('taxonomables');
      Schema::dropIfExists('taxonomies');
      Schema::dropIfExists('taggables');
      Schema::dropIfExists('tags');
   }
};
