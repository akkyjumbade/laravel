<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   function index(Request $req, $reqCode = null) {
      $users = User::latest();
      if ($reqCode) {
         $users->whereHas('role', function($q) use ($reqCode) {
            $q->where('code', $reqCode);
         });
      }
      $status = $req->query('status', null);
      if ($status) {
         $users->where('status', $status);
      }
      //$status = $req->query('status', null);
      $users = $users->paginate(config('admin.pagination_limit'));
      return view('admin::users.index', compact(
         'users'
      ));
   }
   function logout() {
      \Auth::logout();
      return redirect()->to('/');
   }
}
