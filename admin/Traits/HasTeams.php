<?php
namespace Admin\Traits;

use Admin\Models\Team;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

trait HasTeams
{
   function teams(): HasMany {
      return $this->hasMany(Team::class, 'owner_user_id');
   }
   function team(): HasOne {
      return $this->hasOne(Team::class, 'owner_user_id');
   }
}
