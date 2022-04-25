<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class BroadcastController extends Controller
{
   function index(Request $req) {
      $channels = config('admin.broadcast_channels');
      $subscribers = DB::table('subscribers')->get();
      return inertia('broadcast', compact(
         'channels', 'subscribers'
      ));
   }

}
