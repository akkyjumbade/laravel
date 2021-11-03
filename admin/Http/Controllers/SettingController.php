<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SettingController extends Controller
{
   function index(Request $req, $reqCode = null) {
;
      $options = collect(\DB::table('options')->get());
      $options = $options->mapWithKeys(function ($row) {
         return $row;
//         return [
//
//         ];
      });
      return view('admin::settings', compact(
         'options'
      ));
   }

}
