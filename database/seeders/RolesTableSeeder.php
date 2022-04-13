<?php

namespace Database\Seeders;

use Admin\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $roles = config('options.roles');
      foreach ($roles as $key => $role) {
         try {
            Role::updateOrCreate([
               'code' => $role['value'],
            ], [
               'title' => $role['label'],
               'description' => $role['label'],
               'code' => $role['value'],
            ]);
         } catch (\Throwable $th) {
            throw $th;
         }
      }
   }
}
