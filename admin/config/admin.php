<?php

use Admin\Console\Commands\AdminCreateCommand;
use Admin\Console\Commands\AdminSetupCommand;

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
      AdminSetupCommand::class,
      AdminCreateCommand::class,
   ],
   'broadcast_channels' => [
      'push_notification',
      //'sms',
      'email'
   ],
   'view_components' => [

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
