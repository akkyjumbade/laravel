<?php

namespace App\Models;

use Admin\Traits\HasTeams;
use Admin\Traits\UseAccessControl;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;


class User extends Authenticatable  implements JWTSubject
{
   use HasApiTokens, HasFactory, Notifiable;
   use UseAccessControl;
   use HasTeams;

   /**
    * The attributes that are mass assignable.
    *
    * @var string[]
    */
   protected $fillable = [
      'name',
      'email',
      'password',
      'first_name',
      'middle_name',
      'last_name',
      'gender',
      'username',
      'phone',
      'birth_date',
      'avatar',

   ];

   /**
    * The attributes that should be hidden for serialization.
    *
    * @var array
    */
   protected $hidden = [
      'password',
      'remember_token',
   ];


   /**
    * The attributes that should be cast.
    *
    * @var array
    */
   protected $casts = [
      'email_verified_at' => 'datetime',
      'birth_date' => 'date',
   ];
   // Rest omitted for brevity

   /**
    * Get the identifier that will be stored in the subject claim of the JWT.
    *
    * @return mixed
    */
   public function getJWTIdentifier()
   {
      return $this->getKey();
   }

   /**
    * Return a key value array, containing any custom claims to be added to the JWT.
    *
    * @return array
    */
   public function getJWTCustomClaims()
   {
      return [];
   }

   function getAvatarAttribute($value) {
      if ($value) {
         return url($value);
      }
      return "https://gravatar.com/avatar/bcbab1705da3795a0a8ccd415b7f79da?s=400";
   }
}
