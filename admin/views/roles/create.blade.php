<x-admin title="{{ __('roles') }}" :resource="[ 'path' => '/admin/roles', ]">
   <div class="p-4">
      <x-admin-form path="/admin/roles" method="POST">
         <x-admin-text-input error="errors.title" name="title" label="{{ __('Title') }}"></x-admin-text-input>
         <x-admin-text-input error="errors.code" name="code" label="{{ __('Code') }}"></x-admin-text-input>
         <x-admin-text-input error="errors.description" name="description" label="{{ __('description') }}"></x-admin-text-input>
      </x-admin-form>
   </div>
</x-admin>
