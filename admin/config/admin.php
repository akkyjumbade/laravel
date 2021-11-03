<?php

return [
   'title' => 'Admin Dashboard',
   'navicon_url' => '',
   'favicon_url' => '',
   'roles' => [

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
            'to' => route('admin.users.index')
         ],
         [
            'label' => 'Vendors',
            'to' => route('admin.users.index')
         ],
         [
            'label' => 'Drivers',
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
            'label' => 'Settings',
            'to' => url('admin/settings')
         ],
      ]
   ],
   'pagination_limit' => 100,
   'date_format' => 'Y-m-d',
   'time_format' => 'Y-m-d',
];
