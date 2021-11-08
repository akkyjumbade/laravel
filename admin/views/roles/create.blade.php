<x-admin title="{{ __('roles') }}" :resource="[ 'path' => '/admin/roles', ]">
   <div class="p-4">
      <x-admin-form path="{{ $role->id ? route('admin.roles.update', $role->id) : route('admin.roles.store') }}" method="{{ $role->id ? 'PATCH' : 'POST' }}" :initialValues="$role->toArray()">
         <x-admin-text-input error="errors.title" :value="$role->title" name="title" label="{{ __('Title') }}" :required="true"></x-admin-text-input>
         <x-admin-text-input error="errors.code" :value="$role->code" name="code" label="{{ __('Code') }}" :required="true"></x-admin-text-input>
         <x-admin-text-input error="errors.description" :value="$role->description" name="description" label="{{ __('description') }}" :required="true"></x-admin-text-input>
      </x-admin-form>
   </div>
</x-admin>
