<?php

namespace Admin\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
   function __invoke(Request $req) {
      $user = $req->user();
      $notifications = $user->notifications()->latest()->get();
      return inertia('user/notifications', [
         'notifications' => $notifications,
      ]);
   }

}
