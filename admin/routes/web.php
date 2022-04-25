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
    TaxonomyController,
    TeamController,
};
use Admin\Http\Controllers\User\NotificationController;
use Admin\Http\Controllers\User\ProfileController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/profile', [ProfileController::class, '__invoke'])->name('profile');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/inbox', [NotificationController::class, '__invoke'])->name('inbox');
Route::get('/notifications', [NotificationController::class, '__invoke'])->name('notifications');
Route::get('settings', [SettingController::class, 'index'])->name('settings');
Route::get('storage', [StorageController::class, 'index'])->name('index');
Route::get('broadcast', [BroadcastController::class, 'index'])->name('index');

Route::resource('roles', RoleController::class)->names('roles');
Route::resource('permissions', PermissionController::class)->names('permissions');
Route::resource('categories', CategoryController::class)->names('categories');
Route::resource('taxonomies', TaxonomyController::class)->names('taxonomies');
Route::resource('users', UserController::class)->names('users');
Route::resource('teams', TeamController::class)->names('teams');
