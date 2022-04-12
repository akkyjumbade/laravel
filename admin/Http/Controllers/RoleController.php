<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Admin\Models\Permission;
use Admin\Models\Role;
use Illuminate\Validation\Rule;

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
      $role = new Role();
      return view('admin::roles.create', compact(
         'permissions', 'role'
      ));
   }

   function store(Request $req) {
      $req->validate([
         'title' => ['required', 'unique:roles'],
         'code' => ['required', 'unique:roles'],
         'description' => ['nullable', 'max:255'],
      ]);
      try {
         $role = Role::create([
            'title' => $req->input('title'),
            'code' => strtolower($req->input('code', $req->input('title'))),
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
   function show(Request $req, Role $role) {
      $permissions = Permission::select([ 'title as label', 'id as value' ])->get();
      return view('admin::roles.show', compact(
         'permissions', 'role'
      ));
   }

   function edit(Request $req, Role $role) {
      $permissions = Permission::select([ 'title as label', 'id as value' ])->get();
      return view('admin::roles.create', compact(
         'permissions', 'role'
      ));
   }

   function update(Request $req, Role $role) {
      $req->validate([
         'title' => ['required', Rule::unique('roles', 'title')->ignore($role->id)],
         'code' => ['required', Rule::unique('roles', 'code')->ignore($role->id)],
         'description' => ['nullable', 'max:255'],
      ]);
      try {
         $role->update([
            'title' => $req->input('title'),
            'code' => strtolower($req->input('code', $req->input('title'))),
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
}
