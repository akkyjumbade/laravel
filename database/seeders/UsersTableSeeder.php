<?php

namespace Database\Seeders;

use Admin\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $adminUser = [
         'email' => 'admin',
         'username' => 'admin',
         'phone' => '1234567890',
         'password' => bcrypt('secret'),
      ];
      try {
         User::updateOrCreate([
            'email' => 'admin',
         ], $adminUser);
      } catch (\Throwable $th) {
         throw $th;
      }
   }
}
