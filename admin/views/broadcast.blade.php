<x-admin title="Broadcast" :resource="[ 'path' => '/admin/broadcast' ]" subtitle="Send notifications on push-notifications, sms or email">
   <x-slot name="scripts">
      <script>
         const channels = @json($channels)
      </script>
   </x-slot>
   <x-admin-table :columns="[ 'name', 'email', 'push_notification_token', 'created_at' ]">

   </x-admin-table>
</x-admin>
