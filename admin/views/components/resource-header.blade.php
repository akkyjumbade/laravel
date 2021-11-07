<div class="bg-white">
   <div class="px-4">
      <div class="flex justify-between py-6">
         <div>
            <div class="flex items-center text-sm text-gray-700 font-bold tracking-widest">
               <h1 class="text-2xl font-bold">
                  {{ $attributes->get('title') }}
               </h1>
            </div>
            @if ($attributes->get('subtitle'))
               <p class="text-sm text-gray-600">
                  {{ $attributes->get('subtitle') }}
               </p>
            @endif
         </div>
         <div>
            {{ $slot }}
         </div>
      </div>
   </div>
</div>
