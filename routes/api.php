<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
   ApiController,
    FeedController,
    FormController,
    UploadController,
};

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//   return $request->user();
//});

Route::get('/', ApiController::class);
Route::get('/feed', FeedController::class);
Route::post('/upload', UploadController::class);
Route::prefix('forms')->group(function() {
   Route::post('contact', [ FormController::class, 'saveContactForm' ]);
});
