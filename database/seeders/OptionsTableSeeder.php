<?php

namespace Database\Seeders;

use Admin\Models\Setting;
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
         Setting::updateOrInsert([
            'name' => $key,
         ], [
            'name' => $key,
            'value' => $value,
         ]);
      }
   }
}
