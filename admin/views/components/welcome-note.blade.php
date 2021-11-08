<div class="bg-white">
   <div class="px-4 mx-auto">
      <div class="flex justify-between py-6">
         <div>
            <div class="flex items-center text-sm text-gray-700 uppercase font-bold tracking-widest">
               Dashboard
            </div>

         </div>
         <div>

         </div>
      </div>
   </div>
</div>
<div class="px-4 py-8 mx-auto w-full">
   <div>
      <div class="flex items-baseline justify-between">
         <div>
            <h2 class="text-lg">
               Welcome To Dashboard
            </h2>
            <div class="mt-2 text-sm text-gray-700">
               Take your first steps into a serverless future.
            </div>
         </div>
         <!---->
      </div>
      <div class="mt-4">
         <div class="grid grid-cols-4 gap-4 mb-4">
            @foreach($cards as $card)
               <div class="bg-white shadow-md rounded-lg p-3">
                  <h5 class="text-2xl font-extrabold mb-1">{{ $card['count'] }}</h5>
                  <p class="m-0 ">
                     <a href="#" class="text-blue-700">
                        {{ $card['title'] }}
                     </a>
                  </p>
               </div>
            @endforeach
         </div>
      </div>
   </div>
   <!---->
</div>
