<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'title',
      'code',
      'parent_id',
      'taxonomy_id',
   ];
}
