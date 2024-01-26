<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenu sur Sozeasy</title>
    @vite(['resources/css/app.css'])
    <style>
        /* Additional styles that are not handled by Tailwind go here */
    </style>
</head>
<body class="font-raleway bg-gradient-to-r from-white to-purple-100 flex flex-col min-h-screen">

    @include('layouts.partials.header')

    <div class="flex flex-grow flex-row-reverse">
       
        <div class="flex-grow">
            @yield('content')
        </div>

        @include('layouts.partials.sidebar')
    </div>

    <script>
        // JavaScript to toggle the sidebar on button click
        const sidebarBtn = document.querySelector('.sidebar-btn');
        const sidebar = document.querySelector('aside');
        const openPanierBtn = document.getElementById('openPanierBtn');

        sidebarBtn.addEventListener('click', () => {
            sidebar.classList.toggle('w-0');
            sidebar.classList.toggle('w-40');
        });

        openPanierBtn.addEventListener('click', () => {
        // You can replace '/panier' with the actual route for your panier view
        window.location.href = '/panier';
    });


    </script>

</body>
</html>
