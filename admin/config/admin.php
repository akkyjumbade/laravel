<?php

return [
   'title' => 'Admin Dashboard',
   'navicon_url' => '',
   'favicon_url' => '',
   'roles' => [

   ],
   'events' => [
      \Admin\Events\ActivityEvent::class
   ],
   'listeners' => [
      \Admin\Listeners\ActivityEventListener::class
   ],

   'commands' => [
      \App\Console\Commands\CreateRoleCommand::class,
   ],
   'broadcast_channels' => [
      'push_notification',
      //'sms',
      'email'
   ],
   'view_components' => [
      'admin' => \Admin\Components\Admin::class,
      'sidebar' => \Admin\Components\Sidebar::class,
      'header' => \Admin\Components\Header::class,
      'resource-header' => \Admin\Components\ResourceHeader::class,
      'table' => \Admin\Components\Table::class,
      'notice' => \Admin\Components\Notice::class,
      'settings' => \Admin\Components\Settings::class,
      'form' => \Admin\Components\AdminForm::class,
      'text-input' => \Admin\Components\TextInput::class,
      'checkbox' => \Admin\Components\Checkbox::class,
      'storage' => \Admin\Components\Storage::class,
      'storage-item' => \Admin\Components\StorageItem::class,

   ],
   'menus' => [
      'resources' => [
         [

            'label' => 'Categories',
            'to' => url('admin/categories'),
         ],
         [
            'label' => 'Vehicles',
            'to' => url('admin/vehicles'),
         ],
         [
            'label' => 'Bookings',
            'to' => url('admin/bookings'),
         ],
      ],
      'system' => [
         [
            'label' => 'Customers',
            'to' => route('admin.users.index', ['role' => 'customers'])
         ],
         [
            'label' => 'Vendors',
            'to' => route('admin.users.index', ['role' => 'vendors'])
         ],
         [
            'label' => 'Drivers',
            'to' => route('admin.users.index', ['role' => 'drivers'])
         ],
         [
            'label' => 'All users',
            'to' => route('admin.users.index')
         ],
         [
            'label' => 'Roles',
            'to' => route('admin.roles.index')
         ],
         [
            'label' => 'Permissions',
            'to' => route('admin.permissions.index')
         ],
         [
            'label' => 'Storage',
            'to' => url('admin/storage')
         ],
         [
            'label' => 'Broadcast',
            'to' => url('admin/broadcast')
         ],
         [
            'label' => 'Settings',
            'to' => url('admin/settings')
         ],
      ]
   ],
   'pagination_limit' => 100,
   'date_format' => 'Y-m-d',
   'time_format' => 'Y-m-d',
];
