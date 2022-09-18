<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;

class ApiController extends Controller
{

   function __invoke(Request $request) {
      $data = [];
      $data['name'] = config('app.name');
      $data['short_name'] = config('app.short_name', config('app.name'));
      $data['description'] = config('app.description');
      $data['url'] = config('app.url');
      $data['website'] = config('app.url');
      $data['version'] = config('app.version', '0.0.0');
      $data['background_color'] = config('app.background_color', '#000');
      $data['theme_color'] = config('app.theme_color', '#fff');
      $data['logo'] = [
         'sizes' => '144x144',
         'type' => 'image/png',
         'src' => asset('/img/icons/icon.png'),
      ];
      $data['icons'] = [
         [
            'sizes' => '144x144',
            'type' => 'image/png',
            'src' => asset('/img/icons/icon.png'),
         ]
      ];
      $data['contact'] = [
         'email' => env('SUPPORT_EMAIL', env('MAIL_FROM_ADDRESS')),
         'contact_url' => url('/contact'),
         'support_url' => url('/support'),
      ];
      $data['developer'] = [
         'name' => env('DEVELOPER_NAME', config('app.name')),
         'url' => url('/'),
      ];
      $data['links'] = [
         'faq' => url('faq'),
         'terms' => url('terms'),
         'privacy' => url('privacy'),
      ];
      $data['dist']['android'] = [
         'version' => env('ANDROID_APP_VERSION', '0.0.0'),
         'version_number' => env('ANDROID_APP_VERSION_NUMBER', '0.0.0'),
         'store_url' => env('ANDROID_APP_URL', ),
      ];
      $data['dist']['ios'] = [
         'version' => env('IOS_APP_VERSION', '0.0.0'),
         'version_number' => env('IOS_APP_VERSION_NUMBER', '0.0.0'),
         'store_url' => env('IOS_APP_URL', ),
      ];
      $data['time_format'] = config('app.time_format', 'h:i:s');
      $data['date_format'] = config('app.date_format', 'Y-m-d');
      $data['datetime_format'] = config('app.datetime_format', 'Y-m-d h:i:s');
      $data['locale'] = config('app.locale');
      $data['fallback_locale'] = config('app.fallback_locale');
      $data['timezone'] = config('app.timezone');
      $data['origin_country'] = config('app.origin_country');
      $user = null;
      if ($request->user()) {
         $data['user'] = new UserResource($user);
      }
      $data['routes'] = [];
      // $data['routes']['/'] = [
      //    'get' => [
      //       'params' => [
      //          'user_id' => [ 'type' => 'number' ]
      //       ],
      //    ],
      // ];
      return response()->json($data);
   }

}
