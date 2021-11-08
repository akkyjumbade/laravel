<x-admin>
   <div class="container mx-auto">
      @include('admin::components.welcome-note', compact('cards'))

      <div class="bg-white rounded-lg shadow-sm p-4  m-4 mt-0">
         <h3 class="mb-3 text-lg font-bold">{{ __('Recent Activities') }}</h3>
         <ul class="flex flex-col gap-2 text-sm text-gray-700">
            @foreach($recentActivities as $act)
               <li>
                  {{ $act->user->name ?? '' }} - {{ $act->action }} at {{ $act->created_at->diffForHumans() }}
               </li>
            @endforeach
         </ul>
      </div>
   </div>

</x-admin>
