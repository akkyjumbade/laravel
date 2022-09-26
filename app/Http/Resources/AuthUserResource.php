<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class AuthUserResource extends JsonResource
{
   /**
   * Transform the resource into an array.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
   */
   public function toArray($request)
   {
      return [
         'type' => Str::singular($this->getTable()),
         'id' => $this->id,
         'uuid' => $this->uuid,
         'authentication_type' => $this->authentication_type,
         'locale' => $this->locale,
         'attributes' => [
            'name' => $this->name,
            'first_name' => $this->first_name,
            'middle_name' => $this->middle_name,
            'last_name' => $this->last_name,
            'username' => $this->username,
            'email' => $this->email,
            'phone' => $this->phone,
            'birth_date' => $this->birth_date,
            'gender' => $this->gender,
            'country_code' => $this->country_code,
         ],
         'created_at' => $this->created_at,
         'updated_at' => $this->updated_at,
         'last_login_at' => $this->last_login_at,
         'relations' => [
            'team' => new TeamResource($this->whenLoaded('team')),
            'teams' => TeamResource::collection($this->whenLoaded('teams')),
         ],
      ];
   }
}
