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
            'label' => 'Countries',
            'to' => url('admin.geo.countries.index'),
         ],
         [
            'label' => 'Postal codes',
            'to' => url('admin.geo.postal_codes.index'),
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
            'label' => 'Roles',
            'to' => route('admin.roles.index')
         ],
         [
            'label' => 'Permissions',
            'to' => route('admin.permissions.index')
         ],
      ]
   ],
   'pagination_limit' => 100,
   'date_format' => 'Y-m-d',
   'time_format' => 'Y-m-d',
];
