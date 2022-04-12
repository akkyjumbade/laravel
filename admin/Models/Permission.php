<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
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
   ];

   function roles() {
      return $this->belongsToMany(Role::class);
   }

}
