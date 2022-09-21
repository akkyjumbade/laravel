<?php

namespace Admin\Listeners;

use Admin\Events\ActivityEvent;
use App\Models\ActivityLog;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ActivityEventListener
{
   /**
    * Create the event listener.
    *
    * @return void
    */
   public function __construct()
   {
      //
   }

   /**
    * Handle the event.
    *
    * @param  ActivityEvent  $event
    * @return void
    */
   public function handle(ActivityEvent $event)
   {
      $user = $event->user;
      $action = $event->action;
      $payload = $event->payload;
      $time = now();
      try {
         ActivityLog::create([
            'action' => $action,
            'intent' => $action,
            'request' => request()->fullUrl(),
            'payload' => $payload,
            'performed_by_user_id' => $user->id ?? null,
            'session_data',
            'attempts' => 1,
            // 'flag',
         ]);
      } catch (\Throwable $th) {
         Log::error($th);
      }
   }
}
