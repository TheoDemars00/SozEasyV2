<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bienvenu sur Sozeasy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    @vite(['resources/css/app.css'])
    <style>
        /* Additional styles that are not handled by Tailwind go here */
    </style>
</head>
<body class="font-raleway bg-gradient-to-r from-purple-100 to-purple-600 flex flex-col min-h-screen">

    <header class="bg-white text-purple-600 p-4 text-left z-10 flex justify-between items-center">
        <h1>Soz'Easy</h1>
        <div class="sidebar-btn">&#9776;</div>
    </header>

    <aside class="bg-gray-800 text-white p-0 w-0 flex flex-col fixed right-0 transition-all overflow-hidden">
        <nav class="mt-8">
            <a href="#" class="text-white hover:bg-gray-700 py-2 px-4 block">Categories</a>
            <a href="#" class="text-white hover:bg-gray-700 py-2 px-4 block">Profile</a>
            <a href="#" class="text-white hover:bg-gray-700 py-2 px-4 block">Disconnect</a>
        </nav>
    </aside>

    <section class="text-center p-4">
        <img src="your-main-image.jpg" alt="Main Image" class="max-w-full h-auto">
    </section>

    <section class="text-center p-4">
        <h2 class="text-white">Top Ventes</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
            <img src="image1.jpg" alt="Image 1" class="max-w-full h-auto rounded-lg shadow-md">
            <img src="image2.jpg" alt="Image 2" class="max-w-full h-auto rounded-lg shadow-md">
            <img src="image3.jpg" alt="Image 3" class="max-w-full h-auto rounded-lg shadow-md">
            <!-- Add more images as needed -->
        </div>
    </section>

    <script>
        // JavaScript to toggle the sidebar on button click
        const sidebarBtn = document.querySelector('.sidebar-btn');
        const sidebar = document.querySelector('aside');

        sidebarBtn.addEventListener('click', () => {
            const sidebarWidth = getComputedStyle(sidebar).width;
            const sidebarHidden = sidebar.style.width === '0px';
            sidebar.style.width = sidebarHidden ? '320px' : '0';
        });
    </script>

</body>
</html>
