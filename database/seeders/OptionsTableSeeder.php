<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionsTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $defaultOptions = collect(config('options'));
      $defaultOptions = $defaultOptions->only([
         'title', 'time_format', 'date_format', 'timezone', 'default_country', 'locale', 'navicon_url', 'favicon_url',
      ]);
      foreach ($defaultOptions as $key => $value) {
         DB::table('options')->updateOrInsert([
            'var' => $key,
         ], [
            'var' => $key,
            'label' => $key,
            'data' => $value,
         ]);
      }
   }
}
