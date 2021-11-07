<x-admin title="{{ __('users') }}" :resource="[ 'path' => '/admin/users' ]">
   <x-slot name="toolbar">
      <x-admin-button onclick="location.href='/admin/users/create'">Create</x-admin-button>
   </x-slot>
   <x-admin-table :columns="['full_name', 'username', 'phone', 'email', 'created_at']" :rows="$users">
   </x-admin-table>
</x-admin>
