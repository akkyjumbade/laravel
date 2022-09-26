<?php

namespace Admin\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Team extends Model
{
   protected $table = 'teams';
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
      //'title' => '',
      // 'parent_id' => '',
      // 'status' => 'pending',
   ];

   function setTitleAttribute($value) {
      $this->attributes['title'] = $value;
      $this->attributes['code'] = Str::random(6);
   }

   function owner(): BelongsTo
   {
      return $this->belongsTo(User::class, 'owner_user_id');
   }

   function parent(): BelongsTo
   {
      return $this->belongsTo(self::class, 'parent_id');
   }
   
   function members(): BelongsToMany
   {
      return $this->belongsToMany(User::class);
   }

}
