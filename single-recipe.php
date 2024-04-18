<?php include('header.php');

if (isset($_GET['rid']) && $_GET['rid'] !== null) {
    $recipe_id = $_GET['rid'];
    $recipe_query = mysqli_query($con, "SELECT * FROM recipes WHERE `id` = $recipe_id");
    $recipe = mysqli_fetch_array($recipe_query);

    if ($recipe <= 0) {
        $link = $loader->getLink('my-recipes.php');
        echo "<script>alert('Recipe does not exist'); window.location.href='" . $link . "'</script>";
        exit();
    }
} else {
    $link = $loader->getLink('my-recipes.php');
    echo "<script>alert('Recipe does not exist'); window.location.href='" . $link . "'</script>";
    exit();
}



?>

     <!-- Subheader Start -->
  <div class="metro_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">
    <div class="container">
      <div class="metro_subheader-inner">
        <h1>Recipe Details</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Recipe Details</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

  <!-- Post Content Start -->
  <div class="section metro_post-single">
    <div class="container">

      <div class="row">
        <div class="col-lg-12">

          <!-- Content  -->
          <div class="metro_post-single-wrapper metro_recipe-single-wrapper">

            <h2 class="entry-title"><?= $recipe['name']; ?></h2>
            
              <?php
                        
                         $date = $recipe['created_at'];
                    // Convert the date string into the desired format
                    $formatted_day = date('d', strtotime($date));
                    $formatted_month = date('F', strtotime($date));
                    $formatted_year = date('Y', strtotime($date));
                        
                        
                        ?>
           

            <div class="metro_post-single-thumb">
              <img src="uploads/recipes/<?= $recipe['image']; ?>" style="width:100%;height:270px" alt="post">
              <div class="metro_post-date">
                <span><?= $formatted_day ?></span>
                <span><?= $formatted_year ?></span>
              </div>
            </div>

            <!-- Entry Content Start -->
            <div class="entry-content">
                
              <p>
          <?= $recipe['description']; ?>
              </p>

              <div class="row">
                <div class="col-lg-6">
                  <div class="metro_nutritional-facts">
                    <h4>Instructions</h4>
                    	 <?= $recipe['instructions']; ?>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="metro_ingredients">
                    <h4>Ingredients</h4>
                   	<?= $recipe['ingredients']; ?>
                  </div>
                </div>
              </div>

            
            </div>
            <!-- Entry Content End -->

          </div>

        </div>

  

      </div>

    </div>
  </div>
  <!-- Product Content End -->

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

    <?php include('footer.php'); ?>