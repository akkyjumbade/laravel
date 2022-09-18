<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;

//use Tymon\JWTAuth\Http\Middleware\BaseMiddleware;

class JwtMiddleware
{

   /**
    * Handle an incoming request.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \Closure  $next
    * @return mixed
    */
   public function handle($request, Closure $next)
   {
      try {
         $user = $request->user();
         if (!$user) {
            $user = JWTAuth::parseToken()->authenticate();
         }
      } catch (Exception $e) {
         if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
            return response()->json([
               'status' => 'Token is Invalid',
               'ok' => false,
            ], 400);
         }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
            return response()->json([
               'status' => 'Token is Expired',
               'ok' => false,
            ], 400);
         }else{
            return response()->json([
               'status' => 'Authorization Token not found',
               'ok' => false,
            ], 400);
         }
      }
      return $next($request);
   }
}
