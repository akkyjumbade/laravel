<?php

use Admin\Models\Permission;
use Admin\Models\Role;
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
      if (!Schema::hasTable('users')) {
         Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('username')->unique();
            $table->string('phone')->nullable();
            $table->string('phone_prefix')->nullable();
            $table->timestampTz('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestampsTz();
         });
      }
      Schema::table('users', function (Blueprint $table) {
         if (!Schema::hasColumn($table->getTable(), 'uuid')) {
            $table->uuid('uuid');
         }
         if (!Schema::hasColumn($table->getTable(), 'title')) {
            $table->string('title');
         }
         if (!Schema::hasColumn($table->getTable(), 'username')) {
            $table->string('username');
         }
         if (!Schema::hasColumn($table->getTable(), 'password')) {
            $table->string('password');
         }
         if (!Schema::hasColumn($table->getTable(), 'authentication_type')) {
            $table->string('authentication_type')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'locale')) {
            $table->string('locale')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'country_code')) {
            $table->string('country_code')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'deleted_at')) {
            $table->softDeletesTz();
         }
         if (!Schema::hasColumn($table->getTable(), 'last_login_at')) {
            $table->timestampTz('last_login_at')->nullable();
         }
      });
      Schema::create('user_attributes', function (Blueprint $table) {
         $table->id();
         $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
         $table->string('name')->index();
         $table->string('label');
         $table->string('group')->default('attribute');
         $table->string('attribute_type')->default('text');
         $table->longText('value')->nullable();
         $table->bigInteger('order_index')->default(9999);
         $table->boolean('is_autoload')->default(false);
         $table->foreignId('parent_id')->nullable()->constrained($table->getTable());
         $table->softDeletesTz();
         $table->timestampsTz();
      });
      Schema::create('roles', function (Blueprint $table) {
         $table->id();
         $table->string('title')->index();
         $table->string('code')->unique();
         $table->string('description')->nullable();
         $table->boolean('is_active')->default(true);
         $table->foreignId('parent_id')->nullable()->references('id')->on('roles')->constrained($table->getTable());
         $table->timestampsTz();
      });
      Schema::create('permissions', function (Blueprint $table) {
         $table->id();
         $table->string('title')->index();
         $table->string('code')->unique();
         $table->string('description')->nullable();
         $table->foreignId('parent_id')->nullable()->references('id')->on('permissions')->constrained($table->getTable())->comment('Store nested scoped permissions');
         $table->timestampsTz();
      });
      Schema::create('permission_role', function (Blueprint $table) {
         $table->id();
         $table->foreignIdFor(Role::class)->references('id')->on('roles')->constrained()->cascadeOnDelete();
         $table->foreignIdFor(Permission::class)->references('id')->on('permissions')->constrained()->cascadeOnDelete();
      });
      Schema::create('role_user', function (Blueprint $table) {
         $table->id();
         $table->foreignIdFor(User::class)->references('id')->on('users')->constrained()->cascadeOnDelete();
         $table->foreignIdFor(Role::class)->references('id')->on('roles')->constrained()->cascadeOnDelete();
      });
      Schema::create('boards', function (Blueprint $table) {
         $table->id();
         $table->string('title')->index();
         $table->string('code')->unique();
         $table->string('entity_type')->default('team');
         $table->string('description')->nullable();
         $table->foreignId('parent_id')->nullable()->references('id')->on('boards')->constrained($table->getTable());
         $table->foreignIdFor(User::class, 'owner_user_id')->references('id')->on('users')->constrained()->cascadeOnDelete();
         $table->softDeletesTz();
         $table->timestampsTz();
      });
      Schema::create('board_members', function (Blueprint $table) {
         $table->id();
         $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
         $table->foreignId('board_id')->references('id')->on('boards')->constrained('boards')->cascadeOnDelete();
         $table->string('role_code')->default('member');
         $table->timestampTz('invited_at')->useCurrent();
         $table->timestampTz('joined_at')->nullable();
      });


   }

   /**
    * Reverse the migrations.
    *
    * @return void
    */
   public function down()
   {
      Schema::dropIfExists('user_attributes');
      Schema::dropIfExists('permission_role');
      Schema::dropIfExists('permissions');
      Schema::dropIfExists('role_user');
      Schema::dropIfExists('roles');
      Schema::dropIfExists('board_members');
      Schema::dropIfExists('boards');
      Schema::dropIfExists('users');
   }
};
