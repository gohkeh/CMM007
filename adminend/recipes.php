<?php 
include('header.php');
ini_set('display_errors', 0);  

include('../autoloader.php');


  $recipe_query = mysqli_query($conn, "SELECT * FROM `recipes` ");  

?>


<!-- ===== CONTENT ===== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">All Recipes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main Content -->
    <section class="content">
      <div class="container-fluid">
        <!-- PROFILE DETAILS -->
        <div class="card card-default color-palette-box">
          <!-- Card Header -->
     
          <!-- /.Card Header -->
          <!-- Card Body -->
          <div class="card-body table-responsive p-0">
            <table class="table table-bordered table-striped table-hover text-nowrap">
                <thead>
                <tr>
                  <th>ID</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Preparation Time</th>
                                <th>Servings</th>
                                <th>Ingredients</th>
                                <th>Description</th>
                                <th>Instruction</th>
                                <th>Created On</th>
                </tr>
                </thead>
                <tbody>
                  <?php $num=1; ?>
                  <?php while($recipe = mysqli_fetch_array($recipe_query)){ ?>
                  
                    <tr>
                        <td><?php echo $num; ?></td>
                      <td><?= $recipe['name']; ?></td>
                                   <td><?= $loader->categoryName($recipe['category_id']); ?></td>
                                    <td><a href="../uploads/recipes/<?= $recipe['image']; ?>" target="_blank">
                                            <img src="../uploads/recipes/<?= $recipe['image']; ?>" alt="picture" style="height:50px;">
                                        </a></td>
                                    <td><?= $recipe['preparation_time']; ?></td>
                                    <td><?= $recipe['servings']; ?></td>
                                    <td><?= $recipe['ingredients']; ?></td>
                                    <td><?= $recipe['description']; ?></td>
                                    <td><?= $recipe['instructions']; ?></td>
                                    <td><?= $recipe['created_at']; ?></td>
                    </tr>
                   
                  <?php $num++; } ?>
                </tbody>
            </table>
          </div>
          <!-- /.Card Body -->
        </div>
      </div>
    </section>
    <!-- /.Main Content -->
  </div>

<!-- ===== /.CONTENT ===== -->

<!-- ===== FOOTER ===== -->
<?php include('footer.php'); ?>
<!-- ===== /.FOOTER ===== -->

</html>