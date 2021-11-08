<div class="form-field flex mb-3 flex-col">
   @if($label)
      <label for="" class="font-medium field-label flex items-center mb-1 justify-between">
         <span class="text-sm">{{ $label }}</span>

         @if($required ?? '')
            <b class="text-sm text-red-700">*</b>
         @endif
      </label>
   @endif
   <ol class="flex flex-col items-start gap-1 ">
   @foreach($options as $option)
      <li>
         <label
            class="flex cursor-pointer justify-start items-center text-truncate rounded-lg bg-white pl-4 pr-6 py-2 shadow-sm mr-4">
            <div class="text-teal-600 mr-3">
               <input type="radio" name="{{ $name }}" value="{{ @$option['value'] }}" class="form-radio focus:outline-none focus:shadow-outline" />
            </div>
            <div class="select-none text-gray-700">{{ $option['label'] ?? '' }}</div>
         </label>
      </li>
   @endforeach
   </ol>
</div>
