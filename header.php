<?php
include('autoloader.php');

  $cat_query = mysqli_query($con,"SELECT * FROM categories ORDER BY created_at DESC LIMIT 4");
  
  $recipe_query = mysqli_query($con,"SELECT * FROM recipes ORDER BY created_at DESC LIMIT  6");

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trickly - Food Recipe</title>

  <!-- Vendor Stylesheets -->
  <link rel="stylesheet" href="./frontend/assets/css/plugins/bootstrap.min.css">
  <link rel="stylesheet" href="./frontend/assets/css/plugins/animate.min.css">
  <link rel="stylesheet" href="./frontend/assets/css/plugins/magnific-popup.css">
  <link rel="stylesheet" href="./frontend/assets/css/plugins/slick.css">
  <link rel="stylesheet" href="./frontend/assets/css/plugins/slick-theme.css">
  <link rel="stylesheet" href="./frontend/assets/css/plugins/ion.rangeSlider.min.css">

  <!-- Icon Fonts -->
  <link rel="stylesheet" href="./frontend/assets/fonts/flaticon/flaticon.css">
  <link rel="stylesheet" href="./frontend/assets/fonts/font-awesome/css/font-awesome.min.css">

  <!-- Organista Style sheet -->
  <link rel="stylesheet" href="./frontend/assets/css/style.css">

  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

</head>

<body>

  <!-- Aside (Right Panel) -->
  <aside class="metro_aside metro_aside-right">
    <div class="sidebar">

      <!-- Sidebar CTA Start -->
      <div class="sidebar-widget sidebar-cta">
        <img src="./frontend/assets/img/sidebar-cta.jpg" alt="Call To Action">
        <div class="sidebar-cta-content">
          <span>Good Food</span>
          <h6>Best Quality Food</h6>
          <a href="shop.html" class="metro_btn-custom">Shop Now</a>
        </div>
      </div>
      <!-- Sidebar CTA End -->

      <!-- Recent Recipes Start -->
      <div class="sidebar-widget widget-recent-posts">
        <h5 class="widget-title">Recent Recipes</h5>
        <article class="post">
          <a href="blog-details.html"><img src="./frontend/assets/img/blog/sm/1.jpg" alt="post"></a>
          <div class="post-content">
            <a href="#"> Burgers </a>
            <h6> <a href="blog-details.html">Tomato Stuffing with Cumin and Radish</a> </h6>
          </div>
        </article>
        <article class="post">
          <a href="blog-details.html"><img src="./frontend/assets/img/blog/sm/2.jpg" alt="post"></a>
          <div class="post-content">
            <a href="#"> Pizza </a>
            <h6> <a href="blog-details.html">Over Baked Pizza With Four Cheese</a> </h6>
          </div>
        </article>
        <article class="post">
          <a href="blog-details.html"><img src="./frontend/assets/img/blog/sm/3.jpg" alt="post"></a>
          <div class="post-content">
            <a href="#"> Fast Food </a>
            <h6> <a href="blog-details.html">Grilled Burgers With Tomato Paste</a> </h6>
          </div>
        </article>
        <article class="post">
          <a href="blog-details.html"><img src="./frontend/assets/img/blog/sm/4.jpg" alt="post"></a>
          <div class="post-content">
            <a href="#"> Fast Food </a>
            <h6> <a href="blog-details.html">American Style French Fries Air Fried</a> </h6>
          </div>
        </article>
      </div>
      <!-- Recent Recipes End -->

      <!-- Popular Tags Start -->
      <div class="sidebar-widget">
        <h5 class="widget-title">Popular Tags</h5>
        <div class="tagcloud">
          <a href="#">Health</a>
          <a href="#">Food</a>
          <a href="#">Ingredients</a>
          <a href="#">Organic</a>
          <a href="#">Farms</a>
          <a href="#">Green</a>
          <a href="#">Fiber</a>
          <a href="#">Supplements</a>
          <a href="#">Gain</a>
          <a href="#">Live Stock</a>
          <a href="#">Harvest</a>
        </div>
      </div>
      <!-- Popular Tags End -->

    </div>
  </aside>
  <div class="metro_aside-overlay aside-trigger-right"></div>

  <!-- Aside (Mobile Navigation) -->
  <aside class="metro_aside metro_aside-left">
    <a class="navbar-brand" href="index.html"> <img src="./frontend/assets/img/logo.png" alt="logo"> </a>

    <ul>
       <li class="menu-item"> <a href="/">Home</a> </li>

     <li class="menu-item"> <a href="recipes.php">Recipes</a> </li>
          <li class="menu-item"> <a href="recipe-categories.php">Recipe Categories</a> </li>

     
    <li class="menu-item"> <a href="cook/sign-in.php">Chef Login</a> </li>


    </ul>

  </aside>
  <div class="metro_aside-overlay aside-trigger-left"></div>

  <!-- Header Start -->
  <header class="metro_header header-2">

   
    <!-- Topheader End -->

    <!-- Middle Header Start -->
    <div class="metro_header-middle">
      <div class="container">
        <nav class="navbar">

          <!-- Logo -->
          <a class="navbar-brand" href="index.html"> <img src="./frontend/assets/img/logo.png" alt="logo"> </a>

          <!-- Menu -->
          <ul class="navbar-nav">
              
        <li class="menu-item"> <a href="/">Home</a> </li>

     <li class="menu-item"> <a href="recipes.php">Recipes</a> </li>
          <li class="menu-item"> <a href="recipe-categories.php">Recipe Categories</a> </li>

     
    <li class="menu-item"> <a href="cook/sign-in.php">Chef Login</a> </li>


           
          </ul>

          <div class="metro_header-controls">

            <ul class="metro_header-controls-inner">
              <li class="metro_header-btn"> <a href="cook/sign-up.php" title="Submit Recipe"> <i class="far fa-plus"></i> </a> </li>
            </ul>

            <!-- Toggler -->
            <div class="aside-toggler aside-trigger-left">
              <span></span>
              <span></span>
              <span></span>
            </div>

          </div>
        </nav>
      </div>
    </div>
    <!-- Middle Header End -->

  </header>
  <!-- Header End -->
