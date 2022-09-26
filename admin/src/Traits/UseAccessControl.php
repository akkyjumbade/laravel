<?php
namespace Admin\Traits;

use Admin\Models\Role;
use Admin\Models\Team;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait UseAccessControl
{
   function roles(): BelongsToMany {
      return $this->belongsToMany(Role::class);
   }

   function isAdmin(): bool {
      $user = $this;
      return $user->roles()->whereIn('code', ['admin', 'root'])->exists();
   }

   function teams(): HasMany {
      return $this->hasMany(Team::class, 'owner_user_id');
   }
   function team(): HasOne {
      return $this->hasOne(Team::class, 'owner_user_id');
   }
}
