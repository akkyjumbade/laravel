<section class="section py-3 px-3">
   <div class="flex items-baseline section__header mb-4 justify-between">
      <div>
         <h1 class="text-3xl font-bold">
            Users
         </h1>
      </div>
      <div>
         <a href="{{ route('admin.users.create') }}" class="bg-white border px-4 py-2 hover:bg-gray-900 rounded-lg hover:text-white">
            <span>Create</span>
            <i class="fa fa-plus ml-1"></i>
         </a>
      </div>
   </div>
   <div class="table-container">
      <table class="table table-hover">
         <thead>
         <tr>
            @foreach ($columns as $col)
            <th>{{ __($col) }}</th>
            @endforeach
         </tr>
         </thead>
         <tbody>
         {{ $slot }}
         </tbody>
      </table>
   </div>

</section>
