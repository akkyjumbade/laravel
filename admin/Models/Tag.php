<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'name',
      'user_id',
   ];
}
