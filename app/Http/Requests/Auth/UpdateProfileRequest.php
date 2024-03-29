<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProfileRequest extends FormRequest
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
      return [
         'first_name' => [
            'nullable',
         ],
         'middle_name' => [
            'nullable',
         ],
         'last_name' => [
            'nullable',
         ],
         'email' => [
            'nullable',
            'email:rfc,dns',
            Rule::unique('users')->ignore($this->user())
         ],
      ];
   }
}
