<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Taxonomy extends Model
{

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'title',
      'slug',
      'description',
      //'description',
      'parent_id',
   ];

   function terms(): HasMany
   {
      return $this->hasMany(Term::class);
   }
}
