<?php

namespace Admin\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Term extends Model
{

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'title',
      'slug',
      'parent_id',
      'taxonomy_id',
   ];

   function taxonomy(): BelongsTo
   {
      return $this->belongsTo(Taxonomy::class, 'taxonomy_id');
   }
}
