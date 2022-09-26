<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
   /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
   public function toArray($request): array
   {
      // return parent::toArray($request);
      $user = $this->user();
      return [
         'id' => $this->id,
         'attributes' => [
            'title' => $this->title,
            'body' => $this->body,
            'data' => $this->data,
         ],
         'created_at' => $this->created_at,
         'read_at' => $this->read_at,
         'updated_at' => $this->updated_at,
         'relations' => [
            // 'model' => new ModelResource($this->whenLoaded('model')),
         ],
      ];
   }
}
