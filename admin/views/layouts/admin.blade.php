<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
   <meta charset="UTF-8" />
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="csrf-token" content="{{ csrf_token() }}" />

   <link rel="icon" href="{{ asset('assets/favicon.png') }}" type="image/x-icon" />
   <link rel="shortcut icon" href="{{ asset('assets/favicon.png') }}" type="image/x-icon" />

   <title>{{ $title ?? config('admin.title', config('app.name')) }}</title>
   <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="/assets/admin/main.css" />


   {{ $head ?? '' }}

   {{ $css ?? '' }}
   @stack('css')


   <script>
      // setup config from server
      const admin = <?php echo json_encode($layoutData ?? []) ?>;
      const menus = <?php echo json_encode($primaryMenu ?? []) ?>;
   </script>
</head>
<body  style="">
   <div id="root" x-data="{ isExpandedSidebar: false }" class=" text-gray-900 antialiased">
      <div class="min-h-screen flex bg-gray-200">
         <x-admin-sidebar></x-admin-sidebar>
         <div class="flex-grow flex flex-col">
            <x-admin-header></x-admin-header>
            <div class="flex-grow flex flex-col">
               @if($attributes->get('resource'))
               <x-admin-resource-header :resource="$attributes->get('resource')" :title="$attributes->get('title')" :subtitle="$attributes->get('subtitle')">
                  @if(isset($toolbar))
                     <div class="bg-white">
                        {{$toolbar ?? ''}}
                     </div>
                  @endif
               </x-admin-resource-header>
               @endif
               {{ $slot }}
            </div>
         </div>
      </div>
   </div>
   <div class="vue-portal-target"></div>

   {{ $scripts ?? '' }}
   @stack('js')
   <script src="@asset('admin/libs/alpinejs/alpinejs.min.js')"></script>
   <script src="@asset('admin/main.js')"></script>
</body>
</html>

