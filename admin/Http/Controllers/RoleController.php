<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Permission;
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
   function create() {
      $permissions = Permission::get();
      return view('admin::roles.create', compact(
         'permissions'
      ));
   }

   function store(Request $req) {
      $req->validate([
         'title' => ['required', 'unique:roles'],
         'code' => ['required', 'unique:roles'],
      ]);
      try {
         $role = Role::created($req->validated());
         return response()->success([
            'message' => __('Role created'),
            'data' => $role
         ]);
      }catch (\Throwable $th) {
         return response()->error([
            'message' => $th->getMessage()
         ]);
      }
   }
}
