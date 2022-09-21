<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
   /**
   * Determine if the user is authorized to make this request.
   *
   * @return bool
   */
   public function authorize()
   {
      return true;
   }

   /**
   * Get the validation rules that apply to the request.
   *
   * @return array
   */
   public function rules()
   {
      return [
         'name' => [
            'required',
            'string',
            'max:200',
         ],
         'email' => [
            'required',
            'email:dns,rfc',
         ],
         'phone_number' => [
            'required',
            'numeric',
         ],
         'birth_date' => [
            'required',
            'date',
         ],
         'educational_qualification_file' => [
            'nullable',
            'file',
         ],
         'business_name' => [
            'required',
            'string',
         ],
         'incorporated_date' => [
            'required',
            'date',
         ],
         'office_address' => [
            'required',
            'array',
         ],
         'office_address.address_line_1' => [
            'required',
            'string',
         ],
         'office_address.address_line_2' => [
            'nullable',
            'string',
         ],
         'residential_address' => [
            'required',
            'array',
         ],
         'residential_address.address_line_1' => [
            'required',
            'string',
         ],
         'residential_address.address_line_2' => [
            'nullable',
            'string',
         ],
         'business_stage' => [
            'nullable',
            'string',
         ],
         'business_service_years' => [
            'nullable',
            'numeric',
         ],
         'last_year_business_turnover' => [
            'nullable',
            'numeric',
         ],
         'turnover_currency' => [
            'nullable',
            'string',
            'max:3',
         ],
         'description' => [
            'nullable',
            'numeric',
         ],
      ];
   }

   function attributes() {
      return [
         // '' => ''
      ];
   }

   function messages() {
      return [
         // '' => ''
      ];
   }
}
