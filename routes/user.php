<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::middleware([ 'auth', ])->group(function() {
   Route::prefix('user')->as('user.')->group(function() {
      Route::redirect('/', '/dashboard');
      Route::get('profile', [ UserController::class, 'profile' ]);
   });
});