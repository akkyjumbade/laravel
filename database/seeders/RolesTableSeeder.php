<?php

namespace Database\Seeders;

use Admin\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {

      try {
         DB::beginTransaction();
         tap(Role::updateOrCreate([
            'code' => 'root',
         ], [
            'title' => 'Super user',
            'code' => 'root',
         ]), function($rootRole) {
            tap($rootRole->children()->updateOrCreate([
               'code' => 'admin',
            ],[
               'title' => 'Admin',
               'code' => 'admin',
            ]), function ($adminRole) {
               tap($adminRole->children()->updateOrCreate([
                  'code' => 'user',
               ],[
                  'title' => 'Standard user',
                  'code' => 'user',
               ]), function ($userRole) {
                  // tap()
               });
               tap($adminRole->children()->updateOrCreate([
                  'code' => 'editor',
               ],[
                  'title' => 'Moderator',
                  'code' => 'editor',
               ]), function ($userRole) {
                  // tap()
               });
               tap($adminRole->children()->updateOrCreate([
                  'code' => 'csr',
               ],[
                  'title' => 'Customer support',
                  'code' => 'csr',
               ]), function ($userRole) {
                  // tap()
               });
            });
         });
         DB::commit();
      } catch (\Throwable $th) {
         throw $th;
      }
   }
}
