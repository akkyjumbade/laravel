<?php

use Illuminate\Support\Facades\Route;
use \Admin\Http\Controllers\{
   DashboardController,
   UserController,
   RoleController,
   PermissionController,
};

Route::group([
   'prefix' => 'admin',
   'as' => 'admin.',
   'middleware' => [
      'web', 'auth'
   ]
], function () {
   Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
   Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
   Route::get('/inbox', [DashboardController::class, 'inbox'])->name('inbox');
   Route::get('/edit', [DashboardController::class, 'editProfile'])->name('edit');
   Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');

   // Modules specific

   Route::resource('users', UserController::class);
   Route::resource('roles', RoleController::class);
   Route::resource('permissions', PermissionController::class);
});
