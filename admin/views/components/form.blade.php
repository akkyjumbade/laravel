<div class="max-w-screen-md">
   <form action="{{ $path }}" method="POST" x-data="formComponent" x-ref="formEl" x-on:submit.prevent="$event => handleSubmit($event.target)">
      @csrf
      @method($method)
      {{ $slot }}
      <div class="form-footer">
         <div x-show="Object.keys(errors).length" class="mb-4 p-4 rounded-lg bg-red-200 text-red-900 text-sm border border-red-300">
            <ul>
               <template x-for="er, erkey in errors">
                  <li class="mb-1">
                     <a x-bind:href="'#'+erkey" class="mr-1">#</a>
                     <span x-text="er.join(', ')" x-bind:aria-labelledby="erkey"></span>
                  </li>
               </template>
            </ul>
         </div>
         <x-admin-button x-bind:disabled="isSubmitting"  x-bind:class="{ 'disabled is-submitting loading opacity-70': isSubmitting }" class="bg-white rounded-lg py-2 px-4 text-center">
            <span>Submit</span>
            <span x-show="isSubmitting">...</span>
         </x-admin-button>
      </div>
   </form>
</div>


@push('js')
<script>
   const postRequestAsync = payload => new Promise(async (resolve, reject) => {
      try {
         const req = new Request('{{$path}}', {
            method: 'POST',
            headers: {
               Accept: 'application/json'
            },
            body: payload,
         })
         const res = await fetch(req)
         const data = await res.json()
         if (data?.errors) {
            reject(data)
         } else {
            resolve(data)
         }

      } catch( error ) {
         reject(error)
         console.warn(error)
      }
   })
   const handleSubmit = (formEl) => new Promise(async (resolve, reject) => {
      try {
         const formData = new FormData(formEl)
         const res = await postRequestAsync(formData)
         return resolve(res)
      } catch( error ) {
         if(error?.response?.data?.errors) {
            return reject({
               ...error,
               errors: error?.response?.data?.errors,
            })
         }
         return reject(error)
      }
   })
</script>
<script>
   const formComponent = () => {
      return {
         values: {},
         errors: {},
         isSubmitting: false,
         async handleSubmit(formEl) {
            this.errors = {}
            this.isSubmitting = true
            try {
               const res = await handleSubmit(formEl)
               console.info({ res })
            } catch(error ) {
               if(error.errors) {
                  this.errors = error.errors
               } else {
                  this.errors = {}
               }
               console.warn({ error })
            } finally {
               setTimeout(() => {
                  this.isSubmitting = false
               }, 500)
            }
         },
      }
   }
</script>
@endpush
