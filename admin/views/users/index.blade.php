<x-admin title="{{ __('users') }}" :resource="true">
   <x-admin-table :columns="['full_name', 'username', 'phone', 'email', 'created_at']" :rows="$users">
   </x-admin-table>
</x-admin>
