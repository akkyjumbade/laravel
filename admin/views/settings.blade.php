<x-admin>
   <x-slot name="scripts">
      <script>
         const options = @json($options)
      </script>
   </x-slot>
   <x-admin-settings :options="$options"></x-admin-settings>
</x-admin>
