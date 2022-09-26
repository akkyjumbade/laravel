<?php

use Illuminate\Support\Facades\Route;

Route::group([
   'prefix' => 'cp',
   'middleware' => [ 'admin' ],
], function () {
   // write your own logic to customize admin
   //Route::get('custom-endpoint', [ ]);
});