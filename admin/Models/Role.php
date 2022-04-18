<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Role extends Model
{

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'title',
      'code',
      'description',
      'parent_id',
      'is_active',
      'is_readonly',
   ];

   function permissions(): BelongsToMany {
      return $this->belongsToMany(
         Permission::class,
      );
   }

   function children(): HasMany {
      return $this->hasMany(
         self::class,
         'parent_id'
      );
   }
}
