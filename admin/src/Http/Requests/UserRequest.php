<?php

namespace Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
         'first_name' => [
            'required',
            'alpha_num',
            'max:200'
         ],
         'middle_name' => [
            'nullable',
            'alpha_num',
            'max:200'
         ],
         'last_name' => [
            'nullable',
            'alpha_num',
            'max:200'
         ],
         'username' => [
            'required',
            'alpha_num',
            'max:20',
            'unique:users'
         ],
         'password' => [
            'required',
            'min:6',
            'max:20',
         ],
         'phone' => [
            'nullable',
            'digits:10',
            'unique:users',
         ],
         'email' => [
            'nullable',
            'email:rfc',
            'dns',
            'max:255',
            'unique:users',
         ],
         'role_id' => [
            'required',
            'numeric',
         ],
      ];
   }
}
