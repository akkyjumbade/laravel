<?php
use \Illuminate\Support\Facades\Route;
use Modules\GeoLocations\Http\Controllers\GeoLocationController;

Route::group([
   'prefix' => 'api/geo',
   'middleware' => [
      'web',
   ],
   'as' => 'geo.',
], function () {
   Route::get('cities', [GeoLocationController::class, 'cities'])->name('cities');
   Route::get('states', [GeoLocationController::class, 'states'])->name('states');
   Route::get('countries', [GeoLocationController::class, 'countries'])->name('countries');
   Route::get('postal_codes', [GeoLocationController::class, 'postalCodes'])->name('postal_codes');
   Route::get('locations', [GeoLocationController::class, 'locations'])->name('locations');
});
