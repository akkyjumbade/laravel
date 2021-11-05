<x-admin title="{{ __('permissions') }}" :resource="true">
   <div class="p-4">
      <x-admin-form path="{{ route($model->id ? 'admin.permissions.update' : 'admin.permissions.store') }}" method="POST">
         <x-admin-text-input name="title" label="Title"></x-admin-text-input>
         <x-admin-text-input name="code" label="Code"></x-admin-text-input>
         <x-admin-text-input name="resource" label="Resource (Name of resource to access)"></x-admin-text-input>
         <x-admin-text-input name="description" label="Description"></x-admin-text-input>
      </x-admin-form>
   </div>
</x-admin>
