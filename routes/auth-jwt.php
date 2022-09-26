<?php

/* JWT Auth */

use App\Http\Controllers\Auth\JWTAuthController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Middleware\JwtMiddleware;
use Illuminate\Support\Facades\Route;

Route::group([
   'prefix' => 'api',
], function() {
   Route::post('/login', [ JWTAuthController::class, 'login' ]);
   Route::group([
      'prefix' => '/user',
      'middleware' => [
         JwtMiddleware::class,
      ]
   ], function ( ) {
      Route::get('/', [ JWTAuthController::class, 'me' ]);
      Route::post('/update', [ ProfileController::class, 'update' ]);
      Route::post('/profile', [ ProfileController::class, 'update']);
      Route::post('/profile-photo', [ ProfileController::class, 'updateProfilePhoto']);
      Route::get('/notifications', [ ProfileController::class, 'notifications']);
      Route::post('/notifications/mark_as_read', [ ProfileController::class, 'markAsReadNotification']);
   });

   Route::post('/send-otp', [ OtpController::class, 'sendOtp' ]);
});
