

    <?php include('header.php'); ?>

     <!-- Banner Start -->
  <div class="metro_banner banner-1">
    <div class="metro_banner-slider">

      <!-- Banner Item Start -->
      <div class="metro_banner-item dark-overlay dark-overlay-2" style="background-image: url(assets/img/banners/1.jpg)">

        <div class="container">
          <div class="metro_banner-text">
            <h1>Welcome to Recipe Community</h1>
            <p>Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
            <a href="recipe-grid.html" class="metro_btn-custom btn-lg">View Recipes</a>
          </div>
        </div>

      </div>
      <!-- Banner Item Start -->

      <!-- Banner Item Start -->
      <div class="metro_banner-item dark-overlay dark-overlay-2" style="background-image: url(assets/img/banners/2.jpg)">

        <div class="container">
          <div class="metro_banner-text">
            <h1>Welcome to Recipe Community</h1>
            <p>Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.</p>
            <a href="recipe-grid.html" class="metro_btn-custom btn-lg">View Recipes</a>
          </div>
        </div>

      </div>
      <!-- Banner Item Start -->

    </div>
  </div>
  <!-- Banner End -->



  <div class="section pt-0">
    <div class="container">
      <div class="row">

        <div class="col-lg-12">

          <!-- Recipes Start -->
          <div class="section section-padding pt-0 metro_home-slider-wrapper-2">

            <div class="section-title flex-title">
              <h4 class="title">Latest Recipes</h4>
              <div class="metro_arrows">
                <i class="fa fa-arrow-left slick-arrow slider-prev"></i>
                <i class="fa fa-arrow-right slick-arrow slider-next"></i>
              </div>
            </div>

            <div class="metro_home-slider-2">


	 <?php while ($recipe = mysqli_fetch_array($recipe_query)) { ?>
              <!-- Recipe Start -->
              <article class="metro_post metro_recipe metro_recipe-3">
                <div class="metro_post-thumb">
                  <a href="single-recipe.php?rid=<?= $recipe['id']; ?>">
                    <img src="uploads/recipes/<?= $recipe['image']; ?>" alt="recipe">
                  </a>
                  <a href="single-recipe.php?rid=<?= $recipe['id']; ?>" class="metro_recipe-read-more"> <i class="fas fa-arrow-right"></i> </a>
                </div>
                <div class="metro_post-body">
                  <div class="metro_post-desc">
                   
                    <h5> <a href="single-recipe.php?rid=<?= $recipe['id']; ?>"><?= $recipe['name']; ?></a> </h5>
                  </div>
                </div>
              </article>
              <!-- Recipe End -->
	<?php } ?>


            </div>

         

          </div>
          <!-- Recipes End -->

          <!-- Recipes Start -->
          <div class="section section-padding pt-0">

            <div class="section-title flex-title">
              <h4 class="title"> Recipes Categories</h4>
              <a href="recipe-categories.php" class="btn-link"> View All <i class="fas fa-arrow-right"></i>  </a>
            </div>

            <div class="row">
                
        <?php while( $category = mysqli_fetch_array( $cat_query ) ){  ?>
              <!-- Recipe Start -->
              <div class="col-md-6">
                <article class="metro_post metro_recipe">
                  <div class="metro_post-thumb">
                    <a href="recipes.php?cid=<?= $category['id']; ?>">
                      <img src="uploads/category/<?= $category['image']; ?>" alt="recipe">
                    </a>
                    <a href="recipes.php?cid=<?= $category['id']; ?>" class="metro_recipe-read-more"> <i class="fas fa-arrow-right"></i> </a>
                  </div>
                  <div class="metro_post-body">
                    <div class="metro_post-desc">
                      <span class="metro_post-meta">  <a href="recipes.php?cid=<?= $category['id']; ?>">  </span>
                      <h5> <a href="recipes.php?cid=<?= $category['id']; ?>"> <?= $category['name']; ?></a> </h5>

                    </div>
                  
                  </div>
                </article>
              </div>
              <!-- Recipe End --> 
        	<?php } ?>
             
             
            </div>

          </div>
          <!-- Recipes End -->


        </div>


      </div>
    </div>
  </div>

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