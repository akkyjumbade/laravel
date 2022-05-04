<?php
namespace Admin\Traits;

use Admin\Models\Role;

trait UseAccessControl
{
   function roles() {
      return $this->belongsToMany(Role::class);
   }

   function isAdmin() {
      $user = $this;
      return $user->roles()->whereIn('code', ['admin', 'root'])->exists();
   }
}
