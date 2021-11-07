{{--https://tailwindcomponents.com/component/multistep-form-with-tailwindcss-and-alpinejs--}}

<div class="form-field flex mb-3 flex-col" x-data="passwordFieldComponent()">
   @if($attributes->get('label'))
      <label for="" class="font-medium field-label flex items-center justify-between">
         <span class="text-sm">{{ $attributes->get('label') }}</span>
         @if($attributes->get('required'))
         <b class="text-sm text-red-700">*</b>
         @endif
      </label>
   @endif
   <div class="input-container bg-white border border-gray-300 flex focus-within:ring-2 focus-within:ring-gray-600 focus-within:shadow-outline input-container leading-normal px-2 rounded-xl" x-bind:class="{ 'has-error border-red-600 focus-within:ring-red-600': errors.{{ $attributes->get('name') }} }" />
      <input :type="togglePassword ? 'text' : 'password'" x-model="password" @keydown="checkPasswordStrength()" {{ $attributes->merge(['class' => 'bg-transparent w-full focus:outline-none appearance-none']) }} />
      <div class=" right-0 bottom-0 top-0 px-3 py-1 cursor-pointer"
           @click="togglePassword = !togglePassword"
         >
         <svg :class="{'hidden': !togglePassword, 'block': togglePassword }" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-gray-500" viewBox="0 0 24 24"><path d="M12 19c.946 0 1.81-.103 2.598-.281l-1.757-1.757C12.568 16.983 12.291 17 12 17c-5.351 0-7.424-3.846-7.926-5 .204-.47.674-1.381 1.508-2.297L4.184 8.305c-1.538 1.667-2.121 3.346-2.132 3.379-.069.205-.069.428 0 .633C2.073 12.383 4.367 19 12 19zM12 5c-1.837 0-3.346.396-4.604.981L3.707 2.293 2.293 3.707l18 18 1.414-1.414-3.319-3.319c2.614-1.951 3.547-4.615 3.561-4.657.069-.205.069-.428 0-.633C21.927 11.617 19.633 5 12 5zM16.972 15.558l-2.28-2.28C14.882 12.888 15 12.459 15 12c0-1.641-1.359-3-3-3-.459 0-.888.118-1.277.309L8.915 7.501C9.796 7.193 10.814 7 12 7c5.351 0 7.424 3.846 7.926 5C19.624 12.692 18.76 14.342 16.972 15.558z"/></svg>
         <svg :class="{'hidden': togglePassword, 'block': !togglePassword }" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current text-gray-500" viewBox="0 0 24 24"><path d="M12,9c-1.642,0-3,1.359-3,3c0,1.642,1.358,3,3,3c1.641,0,3-1.358,3-3C15,10.359,13.641,9,12,9z"/><path d="M12,5c-7.633,0-9.927,6.617-9.948,6.684L1.946,12l0.105,0.316C2.073,12.383,4.367,19,12,19s9.927-6.617,9.948-6.684 L22.054,12l-0.105-0.316C21.927,11.617,19.633,5,12,5z M12,17c-5.351,0-7.424-3.846-7.926-5C4.578,10.842,6.652,7,12,7 c5.351,0,7.424,3.846,7.926,5C19.422,13.158,17.348,17,12,17z"/></svg>
      </div>
   </div>
   <p x-show="errors" class="field-label flex font-medium items-center justify-between mt-1 text-red-600 text-xs">
      <span x-text="errors.{{ $attributes->get('name') }}"></span>
   </p>
   @if($attributes->get('showMeter'))
   <div class="text-gray-600 mt-2 mb-2 text-sm">
      <p>
         Please create a secure password including the following criteria below.
      </p>
      <ul class="list-disc text-xs ml-4 mt-2">
         <li>lowercase letters</li>
         <li>numbers</li>
         <li>capital letters</li>
         <li>special characters</li>
      </ul>
   </div>
   <div class="flex items-center mt-0 h-3">
      <div class="w-2/3 flex justify-between h-2">
         <div :class="{ 'bg-red-400': passwordStrengthText == 'Too weak' ||  passwordStrengthText == 'Could be stronger' || passwordStrengthText == 'Strong password' }" class="h-2 rounded-full mr-1 w-1/3 bg-gray-300"></div>
         <div :class="{ 'bg-orange-400 bg-yellow-400': passwordStrengthText == 'Could be stronger' || passwordStrengthText == 'Strong password' }" class="h-2 rounded-full mr-1 w-1/3 bg-gray-300"></div>
         <div :class="{ 'bg-green-400': passwordStrengthText == 'Strong password' }" class="h-2 rounded-full w-1/3 bg-gray-300"></div>
      </div>
      <div x-text="passwordStrengthText" class="text-gray-500 font-medium text-sm ml-3 leading-none"></div>
   </div>
   @endif
</div>
@push('js')
<script>
   function passwordFieldComponent() {
      return {
         password: '',
         passwordStrengthText: '',
         togglePassword: false,
         checkPasswordStrength() {
            var strongRegex = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");
            var mediumRegex = new RegExp("^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})");

            let value = this.password;

            if (strongRegex.test(value)) {
               this.passwordStrengthText = "Strong password";
            } else if(mediumRegex.test(value)) {
               this.passwordStrengthText = "Could be stronger";
            } else {
               this.passwordStrengthText = "Too weak";
            }
         }
      }
   }
</script>
@endpush
