<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UpdateProfileRequest;
use App\Http\Requests\UpdateProfilePhotoRequest;
use App\Http\Resources\AuthUserResource;
use App\Http\Resources\NotificationResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;


class ProfileController extends Controller
{
   use \App\Traits\UserTrait;
   function update(UpdateProfileRequest $request) {
      $user = auth('jwt')->user();
      try {
         $user->fill($request->validated());
         $user->save();
         return (new AuthUserResource($user))->additional([
            'message' => __('user_profile_updated_msg'),
         ]);
      } catch (\Throwable $th) {
         // throw $th;
         return response()->json([
            'message' => $th->getMessage(),
         ], 500);
      }
   }

   function updateProfilePhoto(Request $req) {
      $user = auth('jwt')->user();
      try {
         $path = Storage::putFile('public/avatars', $req->file('photo'));
         $user->avatar = Storage::url($path);
         $user->save();
         return (new AuthUserResource($user))->additional([
            'message' => __('user_profile_photo_updated_msg'),
         ]);
      } catch (\Throwable $th) {
         //throw $th;
         return response()->json([
            'ok' => false,
            'message' => $th->getMessage(),
         ], 500);
      }
   }

   function notifications(Request $request) {
      try {
         $user = auth('jwt')->user();
         $notifications = $user->notifications()->latest()->get()->toArray();
         return NotificationResource::collection($notifications);
      } catch (\Throwable $th) {
         return response()->error([
            'message' => $th->getMessage(),
         ]);
      }
   }

   function markAsReadNotification(Request $req) {
      try {
         $user = auth('jwt')->user();
         $isMarked = $user->unreadNotifications()->whereIn('id', [$req->input('notification_id')])->update(['read_at' => now()]);

         return response()->json([
            'ok' => true,
            'is_marked' => boolval($isMarked),
            'message' => __('notification_marked_as_seen')
         ], 200);
      } catch (\Throwable $th) {
         return response()->json([
            'ok' => false,
            'message' => $th->getMessage(),
         ], 500);
      }
   }

}
