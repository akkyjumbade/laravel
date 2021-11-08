@props([ 'placeholder' => '', 'required' => false  ])

<div class="form-field flex mb-3 flex-col" x-data='{ options: @json($options) }'>
   @if($attributes->get('label'))
      <label for="" class="font-medium field-label flex items-center justify-between">
         <span class="text-sm">{{ $attributes->get('label') }}</span>
         @if($required ?? '')
            <b class="text-sm text-red-700">*</b>
         @endif
      </label>
   @endif
   <div class="input-container bg-white border border-gray-300 flex focus-within:ring-2 focus-within:ring-gray-600 focus-within:shadow-outline input-container leading-normal px-2 rounded-xl" x-bind:class="{ 'has-error border-red-600 focus-within:ring-red-600': errors.{{ $attributes->get('name') }} }" >
      <select {{ $attributes->merge(['class' => 'bg-transparent w-full focus:outline-none appearance-none']) }}>
         <option value="">Choose</option>
         <template x-for="opt in options" x-key="opt.value">
            <option x-bind:value="opt.value" x-text="opt.label"></option>
         </template>
      </select>
      <span class="flex items-center">
         <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
          <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
      </span>
   </div>
   <p x-show="errors" class="field-label flex font-medium items-center justify-between mt-1 text-red-600 text-xs">
      <span x-text="errors.{{ $attributes->get('name') }}"></span>
   </p>
</div>
