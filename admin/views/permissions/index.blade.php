<x-admin title="{{ __('permissions') }}" :resource="true">
   <x-slot name="toolbar">
      <x-admin-button onclick="location.href = '{{ route('admin.permissions.create')  }}'">Create</x-admin-button>
   </x-slot>
   <x-admin-table :columns="['title', 'code', 'resource', 'description', '' ]" :rows="$permissions">
      <x-slot name="row">
         <td>
            <a class="text-blue-700 font-medium" x-bind:href="'{{ route('admin.permissions.show', '') }}/'+row.id" x-text="row.title"></a>
         </td>
         <td>
            <span x-text="row.code"></span>
         </td>
         <td>
            <span x-text="row.resource"></span>
         </td>
         <td>
            <span x-text="row.description"></span>
         </td>
         <td class="text-right">
            <x-admin-button x-on:click="location.href = '{{ route('admin.permissions.index', '') }}/' + row.id + '/edit'">
               <span>Edit</span>
            </x-admin-button>
         </td>
      </x-slot>
   </x-admin-table>
</x-admin>
