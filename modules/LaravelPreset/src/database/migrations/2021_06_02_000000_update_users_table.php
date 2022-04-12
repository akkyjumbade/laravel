<?php

use Admin\Models\Role;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersTable extends Migration
{
   public $tableName = 'users';
   /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
      Schema::table($this->tableName, function (Blueprint $table) {
         if (!Schema::hasColumn('users', 'first_name')) {
            $table->string('first_name')->nullable();
         }
         if (!Schema::hasColumn('users', 'middle_name')) {
            $table->string('middle_name')->nullable();
         }
         if (!Schema::hasColumn('users', 'last_name')) {
            $table->string('last_name')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'uuid')) {
            $table->string('uuid')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'bio')) {
            $table->string('bio')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'phone')) {
            $table->string('phone')->nullable();
            $table->timestampTz('phone_verified_at')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'birth_date')) {
            $table->date('birth_date')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'gender')) {
            $table->string('gender')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'avatar')) {
            $table->string('avatar')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'website')) {
            $table->string('website')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'country')) {
            $table->string('country')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'region')) {
            $table->string('region')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'locale')) {
            $table->string('locale')->default('en');
         }
         if (!Schema::hasColumn($table->getTable(), 'timezone')) {
            $table->string('timezone')->default('en');
         }
         if (!Schema::hasColumn($table->getTable(), 'username')) {
            $table->string('username')->unique();
         }
         if (!Schema::hasColumn($table->getTable(), 'last_login_at')) {
            $table->timestampTz('last_login_at')->nullable();
         }
         if (!Schema::hasColumn($table->getTable(), 'refferal_code')) {
            $table->string('refferal_code')->nullable();
            $table->foreignIdFor(User::class, 'reffered_user_id')->nullable()->constrained($table->getTable());
         }
      });
   }

   /**
   * Reverse the migrations.
   *
   * @return void
   */
   public function down()
   {
      // Schema::dropColumn([

      // ]);
   }
}
