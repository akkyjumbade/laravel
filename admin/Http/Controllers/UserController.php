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
   function create() {
      $user = new User;
      return view('admin::users.create', compact(
         'user'
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
      ]);
      try {
         $user = User::create([
            'first_name' => $req->input('first_name'),
            'middle_name' => $req->input('middle_name'),
            'last_name' => $req->input('last_name'),
            'username' => $req->input('username'),
            'phone' => $req->input('phone'),
            'password' => $req->input('password'),
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
}
