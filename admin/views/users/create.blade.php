<x-admin title="{{ __($user->id ? 'Edit user' : 'Create user') }}" :resource="[ 'path' => '/admin/users', ]">
   <div class="p-4">
      <x-admin-form path="{{ $user->id ? route('admin.users.update', $user->id) : route('admin.users.store') }}" method="{{ $user->id ? 'PATCH' : 'POST' }}" :initialValues="$user->toArray()">
         <div class="grid grid-cols-3 gap-3">
            <x-admin-text-input error="errors.first_name" :value="$user->first_name" name="first_name" label="{{ __('First name') }}"></x-admin-text-input>
            <x-admin-text-input error="errors.middle_name" :value="$user->middle_name" name="middle_name" label="{{ __('Middle name') }}"></x-admin-text-input>
            <x-admin-text-input error="errors.last_name" :value="$user->last_name" name="last_name" label="{{ __('Last name') }}"></x-admin-text-input>
         </div>
         <x-admin-text-input error="errors.email" name="email" :value="$user->email" label="{{ __('E-mail') }}"></x-admin-text-input>
         <x-admin-text-input error="errors.phone" name="phone" :value="$user->phone" label="{{ __('Phone') }}"></x-admin-text-input>
         <x-admin-text-input error="errors.username" name="username" :value="$user->username" label="{{ __('Username') }}"></x-admin-text-input>
         <x-admin-password-input :showMeter="true" error="errors.password" name="password" type="password" label="{{ __('password') }}"></x-admin-password-input>
         <x-admin-image-input name="avatar" error="errors.avatar" label="{{ __('Avatar') }}" ></x-admin-image-input>
         <x-admin-select error="errors.role_id" name="role_id" :options="$roles" :value="$user->role_id" :required="true" label="{{ __('role') }}"></x-admin-select>
         <x-admin-radio name="gender" label="Gender" :options="[ [ 'label' => 'Male', 'value' => 'male'], [ 'label' => 'Female', 'value' => 'female'] ]"></x-admin-radio>
         <x-admin-text-input error="errors.description" name="description" label="{{ __('bio') }}"></x-admin-text-input>
      </x-admin-form>
   </div>
</x-admin>
