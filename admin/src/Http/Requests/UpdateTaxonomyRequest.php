<?php

namespace Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaxonomyRequest extends FormRequest
{
   /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
   public function authorize()
   {
      $user = $this->user();
      return $user->can('create_taxonomy');
   }

   /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
   public function rules()
   {
      return [
         'title' => [
            'required',
            'string',
            'max:200'
         ],
         'slug' => [
            'required',
            'string',
         ],
         'description' => [
            'nullable',
            'string',
            'max:200'
         ],
      ];
   }
}
