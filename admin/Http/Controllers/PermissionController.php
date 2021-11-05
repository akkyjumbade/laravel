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

   function create() {
      $model = new Permission();
      return view('admin::permissions.create', compact(
         'model'
      ));
   }
   function store(Request $req) {
      $req->validate([
         'title' => ['required', 'unique:permissions'],
         'code' => ['required', 'unique:permissions'],
         'description' => ['required', ],
         'resource' => ['required', ],
      ]);
      try {
         $role = Permission::create([
            'title' => $req->input('title'),
            'code' => $req->input('code'),
            'resource' => $req->input('resource'),
            'description' => $req->input('description', $req->input('title')),
         ]);
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
   function edit(Request $req, Permission $permission) {
      $model = $permission;
      return view('admin::permissions.create', compact(
         'model'
      ));
   }

}
