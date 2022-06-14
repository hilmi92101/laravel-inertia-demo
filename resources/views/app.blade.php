<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

        <link href="{{ mix('/css/app.css') }}?v={{ mt_rand() }}" rel="stylesheet" />
        <link href="{{ mix('/css/components.css') }}?v={{ mt_rand() }}" rel="stylesheet" />
        @routes 
        <script src="{{ mix('/js/app.js') }}?v={{ mt_rand() }}" defer></script>
        @inertiaHead
    </head>
    <body>
        @inertia
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
    </body>
</html>