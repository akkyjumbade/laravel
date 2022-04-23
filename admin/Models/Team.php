<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Team extends Model
{
   protected $table = 'boards';
   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'title',
      'code',
      'entity_type',
      'description',
      'parent_id',
      'owner_user_id',
   ];
   protected $attributes = [
      'title' => '',
      // 'parent_id' => '',
      // 'status' => 'pending',
   ];

   function setTitleAttribute($value) {
      $this->attributes['title'] = $value;
      $this->attributes['code'] = Str::random(6);
   }
}
