<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Inertia\Inertia;

class DashboardController extends Controller
{
   public function __invoke()
   {
      # code...
   }

   public function index()
   {
      $admin = User::whereHas('roles', function ($builder) {
         $builder->whereIn('code', [ 'admin', 'root' ]);
      })->first();
      dd($admin);
      return Inertia::render('home', [
         'title' => 'welcome user'
      ]);
   }


}
