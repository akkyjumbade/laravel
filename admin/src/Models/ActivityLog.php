<?php

namespace Admin\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityLog extends Model
{
   const ACTION_LOGIN = 'login';
   const ACTION_LOGOUT = 'logout';
   const ACTION_REGISTER = 'register';
   const ACTION_PASSWORD_REQUESTED = 'password-requested';

   /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
      'action',
      'intent',
      'request',
      'payload',
      'performed_by_user_id',
      'session_data',
      'attempts',
      'flag',
   ];

   protected $casts = [
      'payload' => 'array',
      'request' => 'array',
      'session_data' => 'array',
   ];

   function user(): BelongsTo {
      return $this->belongsTo(
         User::class,
         'performed_by_user_id'
      );
   }

}
