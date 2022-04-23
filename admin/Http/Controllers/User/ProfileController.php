<?php

namespace Admin\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
   function index(Request $req) {
      $user = $req->user();
      $subscribers = DB::table('subscribers')->get();
      return $user;
      // return view('admin::profile', compact(
      //    'user',
      // ));
   }

}
