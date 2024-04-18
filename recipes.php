<?php
include('header.php');
if( (isset($_GET['cid'])) && ($_GET['cid'] !== null) ){
$cid = $_GET['cid'];
$recipe_query = mysqli_query($con,"SELECT * FROM recipes where category_id=$cid");
}else{
 $recipe_query = mysqli_query($con,"SELECT * FROM recipes");   
}
    
    ?>

  <!-- Subheader Start -->
  <div class="metro_subheader dark-overlay dark-overlay-2" style="background-image: url(assets/img/subheader.jpg)">
    <div class="container">
      <div class="metro_subheader-inner">
        <h1>Recipe Grid</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Recipes</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
  <!-- Subheader End -->

  <!-- Blog Posts Start -->
  <div class="section">
    <div class="container">
      <div class="row">

	<?php while( $recipe = mysqli_fetch_array($recipe_query) ) { ?>
        <!-- Recipe Start -->
        <div class="col-lg-4 col-md-6">
          <article class="metro_post metro_recipe">
            <div class="metro_post-thumb">
              <a href="single-recipe.php?rid=<?= $recipe['id']; ?>">
                <img src="uploads/recipes/<?= $recipe['image']; ?>" alt="recipe">
              </a>
            </div>
            <div class="metro_post-body">
              <div class="metro_post-desc">
               
                <h5> <a href="single-recipe.php?rid=<?= $recipe['id']; ?>">
                    <?= $recipe['name']; ?>
                    
                </a> <p>
                    
                </p></h5>
               
              </div>
              <a class="btn-link" href="single-recipe.php?rid=<?= $recipe['id']; ?>"> Read More <i class="fas fa-arrow-right"></i> </a>
            </div>
          </article>
        </div>
        <!-- Recipe End -->
<?php } ?>

 

      </div>


    </div>
  </div>
  <!-- Blog Posts End -->

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