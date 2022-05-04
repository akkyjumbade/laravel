<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{

   function index() {
      $data = [];
      $data['version'] = config('app.version', '0.0.0');
      $data['android'] = [
         'version' => env('ANDROID_APP_VERSION', '0.0.0'),
         'version_number' => env('ANDROID_APP_VERSION_NUMBER', '0.0.0'),
         'store_url' => env('ANDROID_APP_URL', ),
      ];
      $data['ios'] = [
         'version' => env('IOS_APP_VERSION', '0.0.0'),
         'version_number' => env('IOS_APP_VERSION_NUMBER', '0.0.0'),
         'store_url' => env('IOS_APP_URL', ),
      ];
      $data['name'] = config('app.name');
      $data['description'] = config('app.description');
      $data['url'] = config('app.url');
      return response()->success($data);
   }

}
