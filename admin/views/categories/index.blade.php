<x-admin title="{{ __('categories') }}" :resource="[ 'path' => '/admin/categories', ]">
   <x-slot name="toolbar">
      <x-admin-button onclick="location.href = '/admin/categories/create'">Create</x-admin-button>
   </x-slot>
   <x-admin-table :columns="['title', 'code', 'description', ]" :rows="$categories">

   </x-admin-table>
</x-admin>
