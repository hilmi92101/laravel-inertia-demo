<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- ------------------------------------------------------
            TAILWIND
        ------------------------------------------------------ -->
        <link href="{{ mix('/css/app.css') }}?v={{ mt_rand() }}" rel="stylesheet" />

        <!-- ------------------------------------------------------
            DASHBOARD 4

            NOTES: REASON WHY WE NEED TO ADD ALL HERE BECAUSE
            HEAD FROM INERTIA LOAD THESE CSS FILES VERY SLOWLY.
            IT EFFECT USER EXPERIENCE.
        ------------------------------------------------------ -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="/asset/dashboard4/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="/asset/dashboard4/assets/css/nucleo-svg.css" rel="stylesheet" />
        <link href="/asset/dashboard4/assets/css/perfect-scrollbar.css" rel="stylesheet" />
        <link href="/asset/dashboard4/assets/css/tooltips.css" rel="stylesheet" />
        <script src="https://unpkg.com/@popperjs/core@2"></script>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="/asset/dashboard4/assets/css/styles.css?v=1.0.0" rel="stylesheet" />
        <link href="{{ mix('/css/dashboard-4.css') }}?v={{ mt_rand() }}" rel="stylesheet" />
        
        
        @routes 
        <script src="{{ mix('/js/app.js') }}?v={{ mt_rand() }}" defer></script>
        @inertiaHead
    </head>
    <body class="m-0 font-sans antialiased font-normal text-size-base leading-default bg-gray-50 text-slate-500">
        @inertia
        <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

        <!-- ------------------------------------------------------
            DASHBOARD 4
        ------------------------------------------------------ -->
        
        <script src="/asset/dashboard4/assets/js/plugins/perfect-scrollbar.min.js" async></script>
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!--
        <script src="/asset/dashboard4/assets/js/sidenav-burger.js?v=2" async></script>
        <script src="/asset/dashboard4/assets/js/dropdown.js?v=33" async></script>
        <script src="/asset/dashboard4/assets/js/plugins/chartjs.min.js" async></script>
        <script src="/asset/dashboard4/assets/js/chart-1.js" async></script>
        <script src="/asset/dashboard4/assets/js/chart-2.js" async></script>
        <script src="/asset/dashboard4/assets/js/fixed-plugin.js?v={{ mt_rand() }}" async></script>
        <script src="/asset/dashboard4/assets/js/tooltips.js" async></script>
        <script src="/asset/dashboard4/assets/js/navbar-sticky.js?v={{ mt_rand() }}" async></script>
        <script src="/asset/dashboard4/assets/js/soft-ui-dashboard-tailwind.js?v=1.0.0" async></script>
        <script src="/asset/dashboard4/assets/js/perfect-scrollbar.js?v={{ mt_rand() }}" async></script>

        -->
        
    </body>
</html>