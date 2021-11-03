<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class PermissionController extends Controller
{
   function index() {
      $permissions = Permission::latest()->paginate(100);
      return view('admin::permissions.index', compact(
         'permissions'
      ));
   }

}
