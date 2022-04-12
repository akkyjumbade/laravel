<?php

namespace Admin\Http\Controllers;

use Admin\Http\Requests\PermissionRequest;
use App\Http\Controllers\Controller;
use Admin\Models\Permission;
use Admin\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class PermissionController extends Controller
{
   function index() {
      $permissions = Permission::latest()->paginate(100);
      return view('admin::permissions.index', compact(
         'permissions'
      ));
   }

   function create() {
      $permission = new Permission();
      return view('admin::permissions.create', compact(
         'permission'
      ));
   }
   function store(PermissionRequest $req) {
      try {
         $role = Permission::create($req->validated());
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
   function show(PermissionRequest $req, Permission $permission) {
      $model = $permission;
      return view('admin::permissions.show', compact(
         'permission'
      ));
   }

   function edit(PermissionRequest $req, Permission $permission) {
      $model = $permission;
      return view('admin::permissions.create', compact(
         'permission'
      ));
   }

   function update(PermissionRequest $req, Permission $permission) {
      try {
         $permission->update($req->validated());
         return response()->success([
            'message' => __('Permission created'),
            'data' => $permission
         ]);
      }catch (\Throwable $th) {
         return response()->error([
            'message' => $th->getMessage()
         ]);
      }
   }

}
