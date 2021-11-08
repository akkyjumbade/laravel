<x-admin title="{{ __('users') }}" :resource="[ 'path' => '/admin/users' ]">
   <x-slot name="toolbar">
      <x-admin-button onclick="location.href='{{ route('admin.users.create') }}'">Create</x-admin-button>
   </x-slot>
   <x-admin-table :columns="['name', 'username', 'phone', 'email', 'role', 'status', 'created_at']" :rows="$users">
      <x-slot name="row">
         <td>
            <a class="text-blue-700 font-medium" x-bind:href="'{{ route('admin.users.show', '') }}/'+row.id" x-text="row.name"></a>
         </td>
         <td>
            <span x-text="row.username"></span>
         </td>
         <td>
            <span x-text="row.phone"></span>
         </td>
         <td>
            <span x-text="row.email"></span>
         </td>
         <td>
            <span x-text="row.role.title"></span>
         </td>
         <td>
            <span x-text="row.status"></span>
         </td>
         <td>
            <span x-text="row.created_at"></span>
         </td>
         <td>
            <x-admin-button x-on:click="location.href = '{{ route('admin.users.index', '') }}/' + row.id + '/edit'">
               <span>Edit</span>
            </x-admin-button>
         </td>
      </x-slot>
   </x-admin-table>
</x-admin>
