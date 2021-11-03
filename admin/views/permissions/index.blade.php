<x-admin title="{{ __('permissions') }}" :resource="true">
   <x-admin-table :columns="['title', 'code', 'description', ]" :rows="$permissions">

   </x-admin-table>
</x-admin>
