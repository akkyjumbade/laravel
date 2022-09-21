<?php

namespace Admin\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
   /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
   public function handle(Request $request, Closure $next)
   {
      $user = $request->user();
      if (!$user) {
         // dd('sdf');
         return abort(401);
      }
      $roles = $user->roles()->pluck('code');

      if (!$this->isSetupComplete()) {
         return redirect('/cp-setup?step=1');
      }
      if ($roles && in_array('admin', $roles->toArray())) {
         return $next($request);
      } else {
         return redirect('/user');
      }
      return abort(401);
   }

   function isSetupComplete() {
      $admin = User::whereHas('roles', function ($builder) {
         $builder->whereIn('code', [ 'admin', 'root' ]);
      })->exists();
      // dd($admin);
      return $admin;
   }
}
