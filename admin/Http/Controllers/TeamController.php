<?php

namespace Admin\Http\Controllers;

use Admin\Http\Requests\TeamRequest;
use Admin\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use Admin\Models\Role;
use Admin\Models\Team;
use Illuminate\Http\Request;
use App\Models\User;

class TeamController extends Controller
{
   function index(TeamRequest $req) {
      $teams = Team::latest();
      $teams = $teams->paginate(config('admin.pagination_limit'));
      return inertia('teams/index', compact(
         'teams'
      ));
   }
   function create() {
      $team = new Team;
      $team->fill([
         'title' => 'My big team'
      ]);
      // $roles = Role::select(['id as value', 'title as label'])->get()->toArray();
      return inertia('teams/create', compact(
         'team'
      ));
   }

   function store(TeamRequest $req) {
      try {
         $team = Team::create($req->validated());
         return redirect()->route('admin.teams.show', $team)->withSuccess(
            'Team created'
         );
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
