<x-admin title="{{ __('roles') }}" :resource="[ 'path' => '/admin/roles', ]">
   <x-slot name="toolbar">
      <a href="{{ url('/admin/roles', ['create',]) }}" class="btn">Create</a>
   </x-slot>
   <x-admin-table :columns="['title', 'code', 'description', ]" :rows="$roles" >
   </x-admin-table>
</x-admin>
