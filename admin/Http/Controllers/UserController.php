<?php

namespace Admin\Http\Controllers;

use Admin\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Admin\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   function index(UserRequest $req) {
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

   function store(UserRequest $req) {
      try {
         $user = User::create($req->validated());
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
   function show(UserRequest $req, User $user) {
      return view('admin::users.show', compact(
         'user',
      ));
   }
   function edit(UserRequest $req, User $user) {
      $roles = Role::select(['id as value', 'title as label'])->get()->toArray();
      return view('admin::users.create', compact(
         'user', 'roles'
      ));
   }
   function update(UserRequest $req, User $user) {
      try {
         $user->update($req->validated());
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
