<?php

namespace Admin\Http\Controllers;

use Admin\Models\Setting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
   function index(Request $req) {
      $options = collect(Setting::query()->get());
      $options = $options->mapWithKeys(function ($row) {
         return [
            $row->var => $row->data
         ];
      });
      return inertia('settings', [
         'settings' => $options,
      ]);
   }

}
