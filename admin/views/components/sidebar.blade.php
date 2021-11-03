   <style>
      .app-sidebar {

      }

      @media screen and (max-width: 700px) {
         .app-sidebar {
            position: absolute;
            height: 100%;
            z-index: 999;
            transform: translateX(-100%);
         }
         .app-sidebar.active {
            transform: translateX(0);
         }
      }
   </style>


<aside class="flex-shrink-0 w-64 bg-gray-900 app-sidebar" x-bind:class="{ 'active': isExpandedSidebar }" x-on:mousedown.outside="isExpandedSidebar ? isExpandedSidebar = false : ''">
   <a href="#" class="block ">
      <div
         class="flex items-center py-3 px-4 bg-gray-500 text-xl text-white font-medium"
      >

         <div class="mr-auto py-0 aspect-w-1 aspect-h-1" >
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

         <ul class="mb-8 mt-3 text-white">
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
            <li class="mt-3 flex justify-between nav-item nav-item--has-action" x-data="{ showCreateIcon: false }" x-on:mousemove="showCreateIcon = !showCreateIcon">
               <a href="{{ $menuItem['to'] }}" class="">
                  {{ $menuItem['label'] }}
               </a>
               <a href="{{ $menuItem['to'] }}/create" x-show="showCreateIcon">
                  <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 128 128" width="24px" height="24px">    <path d="M 64 6.0507812 C 49.15 6.0507812 34.3 11.7 23 23 C 0.4 45.6 0.4 82.4 23 105 C 34.3 116.3 49.2 122 64 122 C 78.8 122 93.7 116.3 105 105 C 127.6 82.4 127.6 45.6 105 23 C 93.7 11.7 78.85 6.0507812 64 6.0507812 z M 64 12 C 77.3 12 90.600781 17.099219 100.80078 27.199219 C 121.00078 47.499219 121.00078 80.500781 100.80078 100.80078 C 80.500781 121.10078 47.500781 121.10078 27.300781 100.80078 C 7.0007813 80.500781 6.9992188 47.499219 27.199219 27.199219 C 37.399219 17.099219 50.7 12 64 12 z M 64 42 C 62.3 42 61 43.3 61 45 L 61 61 L 45 61 C 43.3 61 42 62.3 42 64 C 42 65.7 43.3 67 45 67 L 61 67 L 61 83 C 61 84.7 62.3 86 64 86 C 65.7 86 67 84.7 67 83 L 67 67 L 83 67 C 84.7 67 86 65.7 86 64 C 86 62.3 84.7 61 83 61 L 67 61 L 67 45 C 67 43.3 65.7 42 64 42 z"/></svg>
               </a>
            </li>
            @endforeach
         </ul>
      </div>
   </div>
</aside>
