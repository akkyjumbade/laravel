<?php

namespace App\Http\Controllers\Api;

use Admin\Models\Attachment;
use App\Http\Controllers\Controller;
use App\Http\Requests\FileUploadRequest;
use App\Http\Resources\AttachmentResource;
use Illuminate\Http\Request;

class UploadController extends Controller
{
   function __invoke( FileUploadRequest $request )
   {
      $file = $request->file;
      $namespace = $request->namespace;
      try {
         $data = Attachment::create();
         return (new AttachmentResource($data))->additional([
            'ok' => true,
            'message' => __('file_stored')
         ]);
      } catch (\Throwable $th) {
         //throw $th;
         return response()->json([
            'ok' => false,
            'message' => $th->getMessage(),
         ], 400);
      }
   }
}
