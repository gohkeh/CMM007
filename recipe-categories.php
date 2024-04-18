<?php

include('header.php');
    
$cat_query = mysqli_query($con,"SELECT * FROM categories"); 
 
?>

<!-- Subheader Start -->
  <div class="metro_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">
    <div class="container">
      <div class="metro_subheader-inner">
        <h1>Recipe Categories</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Recipe Categories</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

  <!-- Categories Start -->
  <div class="section">
    <div class="container">
      <div class="row">

     <?php while( $category = mysqli_fetch_array( $cat_query ) ){  ?>
        <!-- Category Start -->
        <div class="col-md-4 col-sm-6">
          <a href="recipes.php?cid=<?= $category['id']; ?>" class="metro_recipe-category">
            <div class="metro_recipe-category-thumb">
              <img src="./uploads/category/<?= $category['image']; ?>" alt="Recipe Category">
            </div>
            <div class="metro_recipe-category-content">
              <h5><?= $category['name']; ?></h5>
             
            </div>
          </a>
        </div>
        <!-- Category End -->
    <?php } ?>
    
   

      

     
      </div>


    </div>
  </div>
  <!-- Categories End -->

  <!-- Instagram Start -->
  <div class="row no-gutters">
    <div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0">
      <a href="assets/img/ig/1.jpg" class="gallery-thumb metro_ig-item">
        <img src="assets/img/ig/1.jpg" alt="ig">
      </a>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0">
      <a href="assets/img/ig/2.jpg" class="gallery-thumb metro_ig-item">
        <img src="assets/img/ig/2.jpg" alt="ig">
      </a>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0">
      <a href="assets/img/ig/3.jpg" class="gallery-thumb metro_ig-item">
        <img src="assets/img/ig/3.jpg" alt="ig">
      </a>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0">
      <a href="assets/img/ig/4.jpg" class="gallery-thumb metro_ig-item">
        <img src="assets/img/ig/4.jpg" alt="ig">
      </a>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0">
      <a href="assets/img/ig/5.jpg" class="gallery-thumb metro_ig-item">
        <img src="assets/img/ig/5.jpg" alt="ig">
      </a>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-4 col-6 p-0">
      <a href="assets/img/ig/6.jpg" class="gallery-thumb metro_ig-item">
        <img src="assets/img/ig/6.jpg" alt="ig">
      </a>
    </div>
  </div>
  <!-- Instagram End -->

    <?php include('footer.php') ?>