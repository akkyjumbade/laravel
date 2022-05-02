<?php


return [
   'title' => env('APP_NAME'),
   'url_prefix' => 'admin',

   /* Default options */
   'time_format' => 'H:i:s',
   'date_format' => 'Y-m-d',
   'timezone' => env('APP_LOCALE'),
   'default_user_status' => 'pending',
   'default_country' => env('DEFAULT_COUNTRY', 'IN'),
   'default_currency' => env('DEFAULT_CURRENCY', 'INR'),

   // Logo
   'navicon_url' => env('NAVICON_URL', '/assets/logos/navicon.png'),
   'favicon_url' => env('FAVICON_URL', '/assets/logos/favicon.png'),

   /* Database seeders */
   'db_seeders' => array(
      \Database\Seeders\OptionsTableSeeder::class,
      \Database\Seeders\RolesTableSeeder::class,
      \Database\Seeders\PermissionsTableSeeder::class,
      \Database\Seeders\UsersTableSeeder::class
   ),

   /* Repositories */
   'repositories' => [
      // 'users' => \App\Repositories\UsersRepository::class,
   ],

   /* Blade components */
   'blade_components' => [

   ],

   /* Console commands to register in service provider */
   'commands' => [

   ],

   /* Roles */
   'roles' => [
      [
         'label' => 'User',
         'value' => 'user',
      ],
      [
         'label' => 'Admin',
         'value' => 'admin',
      ],
      [
         'label' => 'Root',
         'value' => 'root',
      ],
   ],

   /* Permissions */
   'permissions' => [
      [
         'label' => 'Users',
         'value' => 'users',
         'scopes' => ['create', 'read', 'update', 'delete'],
      ],
      [
         'label' => 'Roles',
         'value' => 'roles',
         'scopes' => ['create', 'read', 'update', 'delete'],
      ],
      [
         'label' => 'Permissions',
         'value' => 'permissions',
         'scopes' => ['create', 'read', 'update', 'delete'],
      ],
      [
         'label' => 'Teams',
         'value' => 'teams',
         'scopes' => ['create', 'read', 'update', 'delete'],
      ],
      [
         'label' => 'Categories',
         'value' => 'categories',
         'scopes' => ['create', 'read', 'update', 'delete'],
      ],
      [
         'label' => 'Tags',
         'value' => 'tags',
         'scopes' => ['create', 'read', 'update', 'delete'],
      ],
      [
         'label' => 'Pages',
         'value' => 'pages',
         'scopes' => ['create', 'read', 'update', 'delete'],
      ],
      [
         'label' => 'Address',
         'value' => 'addresses',
         'scopes' => ['create', 'read', 'update', 'delete'],
      ],
      [
         'label' => 'Navigations',
         'value' => 'navigations',
         'scopes' => ['create', 'read', 'update', 'delete'],
      ],
   ],

   /* User statuses */
   'user_statuses' => [
      [
         'label' => 'Pending',
         'value' => 'pending',
      ],
      [
         'label' => 'Blocked',
         'value' => 'blocked',
      ],
      [
         'label' => 'Suspended',
         'value' => 'suspended',
      ],
      [
         'label' => 'Active',
         'value' => 'active',
      ],
   ],
   /* Categories */
   'categories' => [
      [
         'label' => 'Undefined',
         'value' => 'undefined',
      ],
   ],

   /* Tags */
   'tags' => [
      [
         'label' => 'Undefined',
         'value' => 'undefined',
      ],
   ],



];
