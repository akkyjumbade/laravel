<x-admin title="{{ __('categories') }}" :resource="true">
   <x-admin-table :columns="['title', 'code', 'description', ]" :rows="$categories">

   </x-admin-table>
</x-admin>
