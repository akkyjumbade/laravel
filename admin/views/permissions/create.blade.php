<x-admin title="{{ __('permissions') }}" :resource="true">
   <div class="p-4">
      <x-admin-form path="{{ $permission->id ? route('admin.permissions.update', $permission->id) : route('admin.permissions.store') }}" method="{{ $permission->id ? 'PATCH' : 'POST' }}" :initialValues="$permission->toArray()">
         <x-admin-text-input name="title" :value="$permission->title" label="Title" :required="true"></x-admin-text-input>
         <x-admin-text-input name="code" :value="$permission->code" label="Code" :required="true"></x-admin-text-input>
         <x-admin-text-input name="resource" :value="$permission->resource" label="Resource (Name of resource to access)" :required="true"></x-admin-text-input>
         <x-admin-text-input name="description" :value="$permission->description" label="Description"></x-admin-text-input>
      </x-admin-form>
   </div>
</x-admin>
