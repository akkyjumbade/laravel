<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Taxonomy extends Model
{

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'title',
      'parent_id',
   ];
}
