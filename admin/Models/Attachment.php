<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'name',
      'description',
      'mime_type',
      'drive',
      'dir',
      'original_url',
      'color',
      'is_featured',
      'order_index',
      'meta',
      'published_at',
   ];
}
