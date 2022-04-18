<?php

use Illuminate\Support\Facades\Route;
use \Admin\Http\Controllers\{
   DashboardController,
   UserController,
   RoleController,
   PermissionController,
   CategoryController,
   SettingController,
   StorageController,
   BroadcastController,
};

Route::group([
   // 'prefix' => 'admin',
   'as' => 'admin.',
   'middleware' => [
      'web',
      'auth',
   ]
], function () {
   Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
   Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');
   Route::get('/inbox', [DashboardController::class, 'inbox'])->name('inbox');
   Route::get('/edit', [DashboardController::class, 'editProfile'])->name('edit');
   Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');
   Route::get('settings', [SettingController::class, 'index'])->name('settings');
   Route::get('storage', [StorageController::class, 'index'])->name('index');
   Route::get('broadcast', [BroadcastController::class, 'index'])->name('index');

   Route::resource('roles', RoleController::class);
   Route::resource('permissions', PermissionController::class);
   Route::resource('categories', CategoryController::class);
   Route::resource('users', UserController::class);

});
