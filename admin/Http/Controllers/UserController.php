<?php

namespace Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   function index(Request $req) {
      $users = User::latest();
      $reqCode = $req->query('role');
      if ($reqCode) {
         $users->whereHas('role', function($q) use ($reqCode) {
            $q->where('code', $reqCode);
         });
      }
      $status = $req->query('status', null);
      if ($status) {
         $users->where('status', $status);
      }
      $users->with('role:id,title,code');
      //$status = $req->query('status', null);
      $users = $users->paginate(config('admin.pagination_limit'));
      return view('admin::users.index', compact(
         'users'
      ));
   }
   function create() {
      $user = new User;
      $roles = Role::select(['id as value', 'title as label'])->get()->toArray();
      return view('admin::users.create', compact(
         'user', 'roles'
      ));
   }

   function store(Request $req) {
      $req->validate([
         'first_name' => ['required', 'alpha_num', 'max:200'],
         'middle_name' => ['nullable', 'alpha_num', 'max:200'],
         'last_name' => ['nullable', 'alpha_num', 'max:200'],
         'username' => ['required', 'alpha_num', 'max:20', 'unique:users'],
         'password' => ['required', 'min:6', 'max:20', ],
         'phone' => ['nullable', 'digits:10', 'unique:users'],
         'email' => ['nullable', 'email:rfc,dns', 'max:255', 'unique:users'],
         'role_id' => ['required', 'numeric',]
      ]);
      try {
         $user = User::create([
            'first_name' => $req->input('first_name'),
            'middle_name' => $req->input('middle_name'),
            'last_name' => $req->input('last_name'),
            'username' => $req->input('username', $req->input('phone')),
            'phone' => $req->input('phone', $req->input('username')),
            'password' => bcrypt($req->input('password')),
            'email' => $req->input('email'),
            'role_id' => $req->input('role_id'),
         ]);
         return response()->success([
            'message' => __('User created'),
            'data' => $user
         ]);
      }catch (\Throwable $th) {
         return response()->error([
            'message' => $th->getMessage()
         ]);
      }
   }
   function show(Request $req, User $user) {
      return view('admin::users.show', compact(
         'user',
      ));
   }
   function edit(Request $req, User $user) {
      $roles = Role::select(['id as value', 'title as label'])->get()->toArray();
      return view('admin::users.create', compact(
         'user', 'roles'
      ));
   }
   function update(Request $req, User $user) {
      $req->validate([
         'first_name' => ['nullable', 'alpha_num', 'max:200'],
         'middle_name' => ['nullable', 'alpha_num', 'max:200'],
         'last_name' => ['nullable', 'alpha_num', 'max:200'],
         'username' => ['nullable', 'alpha_num', 'max:20', 'unique:users'],
         'password' => ['nullable', 'min:6', 'max:20', ],
         'phone' => ['nullable', 'digits:10', 'unique:users'],
         'email' => ['nullable', 'email:rfc,dns', 'max:255', 'unique:users'],
         'role_id' => ['nullable', 'numeric',]
      ]);
//      dd($req->all());
      try {
         $user->update([
            'first_name' => $req->input('first_name', $user->first_name),
            'middle_name' => $req->input('middle_name', $user->middle_name),
            'last_name' => $req->input('last_name', $user->last_name),
            'username' => $req->input('username', $user->username),
            'phone' => $req->input('phone', $user->phone),
            'email' => $req->input('email', $user->email),
            'role_id' => $req->input('role_id', $user->role_id),
         ]);
         if ($req->password) {
            $user->update([
               'password' => bcrypt($req->input('password')),
            ]);
         }
         return response()->success([
            'message' => __('User saved'),
            'data' => $user
         ]);
      }catch (\Throwable $th) {
         return response()->error([
            'message' => $th->getMessage()
         ]);
      }
   }
}
