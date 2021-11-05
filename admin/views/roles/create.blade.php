<x-admin title="{{ __('roles') }}" :resource="true">
   <div class="p-4">
      <x-admin-form path="/admin/roles" method="POST">
         <x-admin-text-input name="title" label="Title"></x-admin-text-input>
      </x-admin-form>
   </div>
</x-admin>
