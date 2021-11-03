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
   Route::get('settings', [\Admin\Http\Controllers\SettingController::class, 'index'])->name('settings');
   // Modules specific
   Route::resource('roles', RoleController::class);
   Route::resource('permissions', PermissionController::class);
   Route::resource('categories', PermissionController::class);

   Route::resource('users', UserController::class);
   Route::resource('users:{role}', UserController::class);





});
