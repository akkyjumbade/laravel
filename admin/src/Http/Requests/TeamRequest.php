<?php

namespace Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
   /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
   public function authorize()
   {
      return $this->user();
   }

   /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
   public function rules()
   {
      if ($this->isMethod('get')) {
         return [];
      }
      return [
         'title' => [
            'required',
            'string',
            'max:200'
         ],
         'code' => [
            'required',
            'string',
            'max:200'
         ],
         'description' => [
            'required',
            'string',
            'max:200'
         ],
         'owner_user_id' => [
            'required',
            'numeric',
         ],
      ];
   }
}
