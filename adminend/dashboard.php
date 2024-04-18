<?php
    include('header.php');
  
    $cats_q = mysqli_query($conn, "SELECT COUNT(*) AS row_count FROM categories ");
  $cats_q = mysqli_fetch_array($cats_q);

  $recipes_q = mysqli_query($conn, "SELECT COUNT(*) AS row_count FROM recipes ");
  $recipes_q = mysqli_fetch_array($recipes_q);

  $chef_q = mysqli_query($conn, "SELECT COUNT(*) AS row_count FROM chefs ");
  $chef_q = mysqli_fetch_array($chef_q);

  $admins = mysqli_query($conn, " SELECT COUNT(*) AS row_count FROM admins ");
  $admin = mysqli_fetch_array($admins); 
  
  ?>

                <div class="row">
                    
                    <div class="col-sm-6 col-lg-6">
                        <div class="card border-end">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium"> <?= $chef_q['row_count']; ?> </h2>
                                       
                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Cooks
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
    
                    <div class="col-sm-6 col-lg-6">
                        <div class="card border-end ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"><?= $recipes_q['row_count']; ?></h2>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Cook Recipes
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                <br/>
                
                 <div class="row">
                    
                    <div class="col-sm-6 col-lg-6">
                        <div class="card border-end">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium"><?= $cats_q['row_count']; ?></h2>
                                       
                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Recipes Categories
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
    
                    <div class="col-sm-6 col-lg-6">
                        <div class="card border-end ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium">1</h2>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Admins
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br/>
            <div class="row">
                
          
           
         <div class="col-md-12">
          <div class="card  border-bottom-success h-100">
             <div class="card-body">
                 <h4 class="card-title">ABOUT</h4>


          Welcome to Delicious Food admin dashboard is for viewing recipes categories,recipes and cooks.
             

             </div>

         </div>

     </div>

</div>

<?php
                include('footer.php');
            ?>
        