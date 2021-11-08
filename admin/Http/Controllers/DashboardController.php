<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\GeoLocation;

class DashboardController extends Controller
{
   function index() {
      $cards = [];
      $cards['users'] = [
         'count' => User::count(),
         'title' => 'Users',
      ];
      $cards['vendors'] = [
         'count' => User::whereHas('role', function($q) {
            $q->where('code', 'vendor');
         })->count(),
         'title' => 'Vendors',
      ];
      $cards['drivers'] = [
         'count' => User::whereHas('role', function($q) {
            $q->where('code', 'drivers');
         })->count(),
         'title' => 'Drivers',
      ];
      $cards['pending'] = [
         'count' => User::where('status', 'pending')->count(),
         'title' => 'Pending verification',
      ];
      $recentActivities = ActivityLog::with('user:id,name,first_name,last_name,username')->latest()->get();
      return view('admin::index', compact(
         'cards', 'recentActivities'
      ));
   }
   function inbox() {
      return view('admin::inbox');
   }
   function logout() {
      \Auth::logout();
      return redirect()->to('/');
   }
}
