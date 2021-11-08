<x-admin title="{{ __('Create category') }}" :resource="[ 'path' => '/admin/roles', ]">
   <div class="p-4">
      <x-admin-form path="/admin/categories" method="POST" :initialValues="$category->toArray()">
         <x-admin-text-input :value="$category->title ?? ''" error="errors.title" name="title" :required="true" label="{{ __('Title') }}"></x-admin-text-input>
         <x-admin-text-input :value="$category->slug ?? ''" error="errors.slug" name="slug" label="{{ __('Slug') }}"></x-admin-text-input>
         <x-admin-text-input :value="$category->description ?? ''" error="errors.description" name="description" :required="true" label="{{ __('description') }}"></x-admin-text-input>
         <div x-html="JSON.stringify(values)"></div>
      </x-admin-form>
   </div>
</x-admin>
