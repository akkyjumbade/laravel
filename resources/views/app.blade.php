<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
   <link href="{{ mix('/static/main.css') }}" rel="stylesheet" />
   <script src="{{ mix('/static/manifest.js') }}" defer></script>
   <script src="{{ mix('/static/vendor.js') }}" defer></script>
   <script src="{{ mix('/static/main.js') }}" defer></script>
   @inertiaHead
   @routes
</head>

<body>
   @inertia()
</body>

</html>
