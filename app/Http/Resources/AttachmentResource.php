<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AttachmentResource extends JsonResource
{
   /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
   public function toArray($request)
   {
      // return parent::toArray($request);
      return [
         'id' => $this->id,
         'attributes' => [
            'name' => $this->name,
            'title' => $this->title,
            'alt_text' => $this->alt_text,
            'citation' => $this->citation,
            'description' => $this->description,
            'mime_type' => $this->mime_type,
            'drive' => $this->drive,
            'path' => $this->path,
            'url' => $this->url,
            'color' => $this->color,
         ],
         'created_at' => $this->created_at,
         'published_at' => $this->published_at,
         'updated_at' => $this->updated_at,
      ];
   }
}
