<!DOCTYPE html>  
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">  
    <head>  
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">  
        <title>No DB: Resume</title>  

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}?v={{ mt_rand() }}">  
        <link rel="stylesheet" href="{{ mix('css/resume.css') }}?v={{ mt_rand() }}">  
    </head>  
    <body class="antialiased">  
        <div id="app">  
        </div>  
    </body>  
    <script src="/asset/resume/js/html2pdf.bundle.min.js"></script>
    <script src="{{ mix('js/no-db.js') }}?v={{ mt_rand() }}"></script>  
</html>