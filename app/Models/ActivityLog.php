<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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

}
