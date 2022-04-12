<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;

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

   function permissions() {
      return $this->belongsToMany(
         Permission::class,
      );
   }
}
