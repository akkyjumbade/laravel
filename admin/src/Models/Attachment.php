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
      'title',
      'alt_text',
      'citation',
      'description',
      'mime_type',
      'drive',
      'path',
      'url',
      'color',
      'is_featured',
      'order_index',
      'meta',
      'published_at',
   ];
}
