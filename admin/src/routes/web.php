<?php

use Illuminate\Support\Facades\Route;
use \Admin\Http\Controllers\{
   DashboardController,
   UserController,
   RoleController,
   PermissionController,
   SettingController,
   StorageController,
   BroadcastController,
   TaxonomyController,
   TeamController,
   TaxonomyTermController
};
use Admin\Http\Controllers\User\{
   NotificationController,
   ProfileController
};
use Admin\Http\Middleware\AdminMiddleware;

Route::group([
   'middleware' => [ 'web', 'auth', AdminMiddleware::class, ],
   'prefix' => 'cp',
   'as' => 'admin.',

], function () {
   Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
   Route::get('/profile', [ProfileController::class, '__invoke'])->name('profile');
   Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
   Route::get('/inbox', [NotificationController::class, '__invoke'])->name('inbox');
   Route::get('/notifications', [NotificationController::class, '__invoke'])->name('notifications');
   Route::get('settings', [SettingController::class, 'index'])->name('settings');
   Route::get('storage', [StorageController::class, 'index'])->name('index');
   Route::get('broadcast', [BroadcastController::class, 'index'])->name('index');
   // Access control list
   Route::get('acl', [RoleController::class, 'acl'])->name('acl');
   Route::resource('roles', RoleController::class)->names('roles');
   Route::resource('roles.permissions', PermissionController::class)->names('permissions');
   Route::resource('permissions', PermissionController::class)->names('permissions');
   Route::resource('taxonomies', TaxonomyController::class)->names('taxonomies');
   Route::resource('taxonomies.terms', TaxonomyTermController::class)->names('taxonomy_terms');
   Route::resource('users', UserController::class)->names('users');
   Route::resource('teams', TeamController::class)->names('teams');

});

