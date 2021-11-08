<x-admin title="Settings" :resource="[ 'path' => '/admin/settings' ]" subtitle="Manage settings">
   <x-slot name="scripts">
      <script>
         const options = @json($options)
      </script>
   </x-slot>
   <x-admin-settings :options="$options"></x-admin-settings>
</x-admin>
