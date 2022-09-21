<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'name',
      'label',
      'type',
      'data_type',
      'data',
      'input_component',
      'output_component',
      'is_autoload',
   ];
   protected $casts = [
      // 'is_autoload' => 'boolean'
   ];

}
