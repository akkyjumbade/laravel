<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
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
            'code' => $this->code,
            'title' => $this->title,
            'entity_type' => $this->entity_type,
            'description' => $this->description,
         ],
         'created_at' => $this->created_at,
         'updated_at' => $this->updated_at,
         'relations' => [
            'owner' => $this->whenLoaded('owner'),
            'parent' => $this->whenLoaded('parent'),
         ],
      ];
   }
}
