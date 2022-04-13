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
   <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

   {{ $head ?? '' }}

   {{ $css ?? '' }}
   @stack('css')
   @inertiaHead
</head>
<body>
   @inertia
   {{ $scripts ?? '' }}
   @stack('js')
   <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

