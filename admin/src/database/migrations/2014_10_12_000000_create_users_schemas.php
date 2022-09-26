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
         if (!Schema::hasColumn($table->getTable(), 'username')) {
            $table->string('username');
         }
         if (!Schema::hasColumn($table->getTable(), 'first_name')) {
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'password')) {
            $table->string('password')->nullable();
         }
         //if (!Schema::hasColumn($table->getTable(), 'gender')) {
         //   $table->string('gender')->nullable();
         //}
         //if (!Schema::hasColumn($table->getTable(), 'birth_date')) {
         //   $table->date('birth_date')->nullable();
         //}
         if (!Schema::hasColumn($table->getTable(), 'authentication_type')) {
            $table->string('authentication_type')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'locale')) {
            $table->string('locale')->default(config('app.locale'));
         }
         if (!Schema::hasColumn($table->getTable(), 'country_code')) {
            $table->string('country_code')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'deleted_at')) {
            $table->timestampTz('delete_request_at')->nullable()->comment(
               'Time when user requested to delete the account'
            );
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
         $table->foreignIdFor(User::class)->constrained('users')->cascadeOnDelete();
         $table->foreignIdFor(Role::class)->constrained('roles')->cascadeOnDelete();
      });
      Schema::create('teams', function (Blueprint $table) {
         $table->id();
         $table->string('title')->index();
         $table->string('code')->unique();
         $table->string('entity_type')->default('team');
         $table->string('description')->nullable();
         $table->foreignId('parent_id')->nullable()->references('id')->on('teams')->constrained($table->getTable());
         $table->foreignId('owner_user_id')->references('id')->on('users')->constrained()->cascadeOnDelete();
         $table->softDeletesTz();
         $table->timestampsTz();
      });
      Schema::create('team_members', function (Blueprint $table) {
         $table->id();
         $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
         $table->foreignId('team_id')->references('id')->on('teams')->constrained('teams')->cascadeOnDelete();
         $table->string('role_code')->default('member');
         $table->timestampTz('invited_at')->useCurrent();
         $table->timestampTz('joined_at')->nullable();
      });

      if (!Schema::hasTable('password_resets')) {
         Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token');
            $table->timestampTz('created_at')->nullable();
         });
      }

      if (!Schema::hasTable('sessions')) {
         Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignIdFor(User::class)->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity')->index();
         });
      }

      Schema::create('notifications', function (Blueprint $table) {
         $table->uuid('id')->primary();
         $table->string('route')->nullable();
         $table->string('tracking_id')->nullable();
         $table->string('type');
         $table->morphs('notifiable');
         $table->text('data');
         $table->longText('meta')->nullable();
         $table->timestampTz('read_at')->nullable();
         $table->timestampsTz();
      });
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

      Schema::create('jobs', function (Blueprint $table) {
         $table->bigIncrements('id');
         $table->string('queue')->index();
         $table->longText('payload');
         $table->unsignedTinyInteger('attempts');
         $table->unsignedInteger('reserved_at')->nullable();
         $table->unsignedInteger('available_at');
         $table->unsignedInteger('created_at');
      });
      Schema::create('job_batches', function (Blueprint $table) {
         $table->string('id')->primary();
         $table->string('name');
         $table->integer('total_jobs');
         $table->integer('pending_jobs');
         $table->integer('failed_jobs');
         $table->text('failed_job_ids');
         $table->mediumText('options')->nullable();
         $table->integer('cancelled_at')->nullable();
         $table->integer('created_at');
         $table->integer('finished_at')->nullable();
      });
      Schema::create('failed_jobs', function (Blueprint $table) {
         $table->id();
         $table->string('uuid')->unique();
         $table->text('connection');
         $table->text('queue');
         $table->longText('payload');
         $table->longText('exception');
         $table->timestampTz('failed_at')->useCurrent();
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
      Schema::dropIfExists('team_members');
      Schema::dropIfExists('teams');
      Schema::dropIfExists('users');
      Schema::dropIfExists('password_resets');
      Schema::dropIfExists('notifications');
      Schema::dropIfExists('activity_logs');
      Schema::dropIfExists('sessions');
      Schema::dropIfExists('jobs');
      Schema::dropIfExists('job_batches');
      Schema::dropIfExists('failed_jobs');
   }
};
