@props([ 'placeholder' => '', 'required' => false  ])

<div class="form-field flex mb-3 flex-col">
   @if($attributes->get('label'))
      <label for="" class="font-medium field-label flex items-center justify-between">
         <span class="text-sm">{{ $attributes->get('label') }}</span>

         @if($required ?? '')
            <b class="text-sm text-red-700">*</b>
         @endif
      </label>
   @endif
      @dump($required ?? '', $attributes)
   <div class="input-container bg-white border border-gray-300 flex focus-within:ring-2 focus-within:ring-gray-600 focus-within:shadow-outline input-container leading-normal px-2 rounded-xl" x-bind:class="{ 'has-error border-red-600 focus-within:ring-red-600': errors.{{ $attributes->get('name') }} }" />
      <input type="text" placeholder="{{ $placeholder ?? '' }}" {{ $attributes->merge(['class' => 'bg-transparent w-full focus:outline-none appearance-none']) }} />
   </div>
   <p x-show="errors" class="field-label flex font-medium items-center justify-between mt-1 text-red-600 text-xs">
      <span x-text="errors.{{ $attributes->get('name') }}"></span>
   </p>
</div>
