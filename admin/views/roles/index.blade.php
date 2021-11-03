<x-admin title="{{ __('roles') }}" :resource="true">
   <x-admin-table :columns="['title', 'code', 'description', ]" :rows="$roles">

   </x-admin-table>
</x-admin>
