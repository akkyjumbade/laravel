<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class RoleController extends Controller
{
   function index() {
      $roles = Role::latest()->paginate(100);
      return view('admin::roles.index', compact(
         'roles'
      ));
   }
   function logout() {
      \Auth::logout();
      return redirect()->to('/');
   }
}
