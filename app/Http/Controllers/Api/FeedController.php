<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedController extends Controller
{
   function __invoke(Request $request)
   {
      $data = [];
      $data['posts'] = [];
      $data['notifications'] = [];
      return response()->json([
         'data' => $data,
         'meta' => [
            'locale' => $request->header('locale'),
         ],
      ], 200);
   }
}
