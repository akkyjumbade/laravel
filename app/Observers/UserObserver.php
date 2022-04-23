<?php

namespace App\Observers;

use Admin\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;


class UserObserver
{
   /**
    * Handle the User "created" event.
    *
    * @param  \App\Models\User  $user
    * @return void
    */
   public function saving(User $user)
   {
      if (!$user->username) {
         $user->username = $user->phone ?? $user->email;
      }
      if (!$user->name) {
         $user->name = $user->first_name;
         if (!$user->first_name) {
            $user->name = $user->username;
            $user->first_name = $user->username;
         }
      }
      if (!$user->uuid) {
         $user->uuid = Str::uuid();
      }
      if (!$user->title) {
         $user->title = $user->email;
      }

   }
   /**
    * Handle the User "created" event.
    *
    * @param  \App\Models\User  $user
    * @return void
    */
   public function created(User $user)
   {
      if (!$user->username) {
         $user->username = uniqid();
      }
      $user->save();
      $user->teams()->create([
         'title' => $user->name
      ]);
   }

   /**
    * Handle the User "updated" event.
    *
    * @param  \App\Models\User  $user
    * @return void
    */
   public function updated(User $user)
   {
      //
   }

   /**
    * Handle the User "deleted" event.
    *
    * @param  \App\Models\User  $user
    * @return void
    */
   public function deleted(User $user)
   {
      //
   }

   /**
    * Handle the User "restored" event.
    *
    * @param  \App\Models\User  $user
    * @return void
    */
   public function restored(User $user)
   {
      //
   }

   /**
    * Handle the User "force deleted" event.
    *
    * @param  \App\Models\User  $user
    * @return void
    */
   public function forceDeleted(User $user)
   {
      //
   }
}
