<x-admin title="{{ __('categories') }}" :resource="[ 'path' => '/admin/categories', ]">
   <x-slot name="toolbar">
      <a href="{{ url('/admin/categories', ['create',]) }}" class="btn">Create</a>
   </x-slot>
   <x-admin-table :columns="['title', 'code', 'description', ]" :rows="$categories">

   </x-admin-table>
</x-admin>
