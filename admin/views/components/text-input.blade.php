<div class="form-field flex mb-3 flex-col">
   @if($attributes->get('label'))
      <label for="" class="field-label flex items-center justify-between">
         <span>{{ $attributes->get('label') }}</span>
      </label>
   @endif
   <div class="input-container bg-white focus:outline-none focus:shadow-outline border border-gray-500 px-2 rounded-md flex  leading-normal" />
      <input type="text" {{ $attributes->merge(['class' => 'py-2 px-0 w-full flex-1 outline-none appearance-none']) }} />
   </div>
   @if($attributes->get('error'))
      <p class="field-label flex items-center justify-between text-red-600">
         <span>{{ $attributes->get('error') }}</span>
      </p>
   @endif
</div>
