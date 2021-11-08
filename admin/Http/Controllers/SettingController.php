<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SettingController extends Controller
{
   function index(Request $req) {
      $options = collect(\DB::table('options')->get());
      $options = $options->mapWithKeys(function ($row) {
         return [
            $row->var => $row->data
         ];
      });
      return view('admin::settings', compact(
         'options'
      ));
   }

}
