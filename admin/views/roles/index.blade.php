<x-admin title="{{ __('roles') }}" :resource="[ 'path' => '/admin/roles', ]">
   <x-slot name="toolbar">
      <x-admin-button onclick="location.href = '{{ url('/admin/roles', ['create',]) }}'">Create</x-admin-button>
   </x-slot>
   <x-admin-table :columns="['title', 'code', 'description', '']" :rows="$roles" >
      <x-slot name="row">
         <td>
            <a class="text-blue-700 font-medium" x-bind:href="'{{ route('admin.roles.show', '') }}/'+row.id" x-text="row.title"></a>
         </td>
         <td>
            <span x-text="row.code"></span>
         </td>
         <td>
            <span x-text="row.description"></span>
         </td>
         <td class="text-right">
            <x-admin-button x-on:click="location.href = '{{ route('admin.roles.index', '') }}/' + row.id + '/edit'">
               <span>Edit</span>
            </x-admin-button>
         </td>
      </x-slot>
   </x-admin-table>
</x-admin>
