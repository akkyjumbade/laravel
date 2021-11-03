<div class="flex-shrink-0 w-64 bg-gray-900">
   <a href="#" class="block ">
      <div
         class="flex items-center py-3 px-4 bg-gray-500 text-xl text-white font-medium"
      >

         <div class="mr-auto bg-white py-0 aspect-w-1 aspect-h-1" >
            <img src="//placehold.it/64?text=logo" class="rounded-2xl object-cover" alt="{{ config('app.name') }}" >
         </div>
      </div>
   </a>
   <div>
      <div class="px-2 py-2">
         <div>
            <!---->
         </div>
      </div>
      <div class="px-6 py-6 text-white">
         <a href="/admin/" class="router-link-exact-active router-link-active">
            Dashboard
         </a>
      </div>
      <!---->
      <div class="px-6 py-6 border-t border-gray-700">
         <h4
            class="text-sm text-gray-600 uppercase font-bold tracking-widest"
         >
            Resources
         </h4>

         <ul class="mb-5 mt-3 text-white">
            @foreach(config('admin.menus.resources') as $menuItem)
            <li class="mt-3">
               <a href="{{ $menuItem['to'] }}" class="">
                  {{ $menuItem['label'] }}
               </a>
            </li>
            @endforeach
         </ul>
         <h4
            class="text-sm text-gray-600 uppercase font-bold tracking-widest"
         >
            Users
         </h4>

         <ul class="mt-3 text-white">
            @foreach(config('admin.menus.system') as $menuItem)
            <li class="mt-3">
               <a href="{{ $menuItem['to'] }}" class="">
                  {{ $menuItem['label'] }}
               </a>
            </li>
            @endforeach
         </ul>
      </div>
   </div>
</div>
