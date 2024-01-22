<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bienvenu sur Sozeasy</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
		
		@vite(['resources/css/homepage.css'])
        
    </head>

<body>

  <header>
    <h1>Soz'Easy</h1>
    <div class="sidebar-btn">&#9776;</div> <!-- Sidebar button icon -->
    <!-- Add your navigation links here -->
  </header>

<aside>
    <!-- <div class="screen__background__shape screen__background__shape1"></div>
    <div class="screen__background__shape screen__background__shape2"></div>
    <div class="screen__background__shape screen__background__shape3"></div>
    <div class="screen__background__shape screen__background__shape4"></div> -->
  <nav>
    <a href="#">Categories</a>
    <a href="#">Profile</a>
    <a href="#">Disconnect</a>
  </nav>
</aside>

  <section>
    <img src="your-main-image.jpg" alt="Main Image" class="main-image">
  </section>

  <section>
    <h2>Top Ventes</h2>
    <div class="image-grid">
      <img src="image1.jpg" alt="Image 1">
      <img src="image2.jpg" alt="Image 2">
      <img src="image3.jpg" alt="Image 3">
      <!-- Add more images as needed -->
    </div>
  </section>

  <script>
    // JavaScript to toggle the sidebar on button click
    const sidebarBtn = document.querySelector('.sidebar-btn');
    const sidebar = document.querySelector('aside');

    sidebarBtn.addEventListener('click', () => {
      const sidebarWidth = getComputedStyle(sidebar).width;
      const sidebarHidden = sidebar.style.right === `-${sidebarWidth}`;
      sidebar.style.right = sidebarHidden ? '0' : `-${sidebarWidth}`;
    });
  </script>

</body>
</html>

