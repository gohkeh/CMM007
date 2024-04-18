<?php
session_start();


if(!isset($_SESSION['admin'])){
  header('Location: login.php');
}

$details = $_SESSION['admin'];


if(isset($_GET['fun'])){
  if($_GET['fun'] == 'logout' ){
     session_destroy();
     header('Location: login.php');
  }
}

include("../config.php")
//  echo $details['name']; 

?>

<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="../cook/assets/" data-template="vertical-menu-template"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>Cook Dashboard || Delicious Food</title>
    
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5J3LMKC');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <link rel="icon" href="/img/core-img/favicon.ico">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="../cook/assets/vendor/fonts/fontawesome.css">
    <link rel="stylesheet" href="../cook/assets/vendor/fonts/tabler-icons.css">
    <link rel="stylesheet" href="../cook/assets/vendor/fonts/flag-icons.css">

    <!-- Core CSS -->
    <link rel="stylesheet" href="../cook/assets/vendor/css/rtl/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="../cook/assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="../cook/assets/css/demo.css">
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../cook/assets/vendor/libs/node-waves/node-waves.css">
    <link rel="stylesheet" href="../cook/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../cook/assets/vendor/libs/typeahead-js/typeahead.css"> 
    <link rel="stylesheet" href="../cook/assets/vendor/libs/apex-charts/apex-charts.css">
<link rel="stylesheet" href="../cook/assets/vendor/libs/swiper/swiper.css">
<link rel="stylesheet" href="../cook/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<link rel="stylesheet" href="../cook/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
<link rel="stylesheet" href="../cook/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">

    <!-- Page CSS -->
    <link rel="stylesheet" href="../cook/assets/vendor/css/pages/cards-advance.css">

    <!-- Helpers -->
    <script src="../cook/assets/vendor/js/helpers.js"></script>
    

    <script src="../cook/assets/js/config.js"></script>
    
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    
</head>

<body>


<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">

  <div class="app-brand demo ">
    <a href="/dashboard.php" class="app-brand-link">
      <span class="app-brand-logo demo">
<img src="/img/core-img/favicon.ico" width="32" height="22">
</span>
      <span class="app-brand-text demo menu-text fw-bold">Delicious</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  
  
  <ul class="menu-inner py-1">

       <li class="menu-item">
      <a href="dashboard.php" class="menu-link">
        <i class="menu-icon tf-icons ti ti-smart-home"></i>
        <div data-i18n="Dashboard">Dashboard</div>
      </a>
    </li>
    
       <li class="menu-item">
      <a href="/" target="_blank" class="menu-link">
        <i class="menu-icon tf-icons ti ti-globe"></i>
        <div data-i18n="Official Website">Official Website</div>
      </a>
    </li>
    

    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="ACTIONS">ACTIONS</span>
    </li>
  
   <li class="menu-item">
      <a href="categories.php"  class="menu-link">
        <i class="menu-icon tf-icons ti ti-calendar"></i>
        <div data-i18n="Recipe Categories">Recipe Categories</div>
      </a>
    </li>
    
     <li class="menu-item">
      <a href="recipes.php"  class="menu-link">
        <i class="menu-icon tf-icons ti ti-briefcase"></i>
        <div data-i18n="All Recipes">All Recipes</div>
      </a>
    </li>
    
     <li class="menu-item">
      <a href="chefs.php"  class="menu-link">
        <i class="menu-icon tf-icons ti ti-users"></i>
        <div data-i18n="All Cook">All Cook</div>
      </a>
    </li>


    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="OTHERS">OTHERS</span>
    </li>
    
    
    
    <li class="menu-item">
      <a href="profile.php"  class="menu-link">
        <i class="menu-icon tf-icons ti ti-user"></i>
        <div data-i18n="Profile">Profile</div>
      </a>
    </li>
    
    <li class="menu-item">
      <a href="dashboard.php?fun=logout"  class="menu-link">
        <i class="menu-icon tf-icons ti ti-logout"></i>
        <div data-i18n="Logout">Logout</div>
      </a>
    </li>
    
  </ul>
  
  

</aside>
<!-- / Menu -->

    

    <!-- Layout container -->
    <div class="layout-page">
      
      



<!-- Navbar -->

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  

 

      
      
      <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="ti ti-menu-2 ti-sm"></i>
        </a>
      </div>
      

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

      <ul class="navbar-nav flex-row align-items-center ms-auto">
       


          <!-- User -->
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="/img/core-img/favicon.ico" alt="" class="h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="pages-account-settings-account.html">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
                        <img src="/img/core-img/favicon.ico" alt="" class="h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-medium d-block"><?= $details['name'] ?></span>
                      <small class="text-muted">Admin</small>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="profile.php">
                  <i class="ti ti-user-check me-2 ti-sm"></i>
                  <span class="align-middle">My Profile</span>
                </a>
              </li>

              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="dashboard.php?fun=logout" >
                  <i class="ti ti-logout me-2 ti-sm"></i>
                  <span class="align-middle">Log Out</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ User -->
          


        </ul>
      </div>

 
</nav>

<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            