<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ContactFormRequest;
use Illuminate\Http\Request;

class FormController extends Controller
{
   function saveContactForm( ContactFormRequest $request ) {
      dd($request->validated());
   }
}
