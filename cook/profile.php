  <?php
    include('header.php');
     $cook_details = $loader->user;
  ?>
  
   <!-- PROFILE DETAILS -->
        <div class="card col-md-12">
          <!-- Card Header -->
          <div class="card-header d-flex justify-content-center bg-secondary p-4">
            <h2 class="card-title text-white">PROFILE DETAILS</h2>
          </div>
          <!-- /.Card Header -->
          <!-- Card Body -->
            <div class="card-body">
            
              <div class="row mt-3 mx-2 mx-lg-4">
                <h5 class="col text-left"><b>Name:</b></h5>
                <p class="col text-right"><?php echo $cook_details['name']; ?></p>
              </div>

            

              <div class="row mt-3 mx-2 mx-lg-4">
                <h5 class="col text-left"><b>Role:</b></h5>
                <p class="col text-right">Cook</p>
              </div>

              <div class="row mt-3 mx-2 mx-lg-4">
                <h5 class="col text-left"><b>Email Address:</b></h5>
                <p class="col text-right"><?php echo $cook_details['email']; ?></p>
              </div>

              <div class="row mt-3 mx-2 mx-lg-4">
                <h5 class="col text-left"><b>Date Registered:</b></h5>
                <p class="col text-right"><?php echo $cook_details['created_at']; ?></p>
              </div>
                <div class="text-center my-4"><a href="dashboard.php?fun=logout" class="btn btn-danger delete-link-logout">Logout  <i class="fas fa-arrow-right"></i></a></div>
                <script>
                  document.addEventListener('DOMContentLoaded', function() {
                      const deleteLinks = document.querySelectorAll('.delete-link-logout');

                      deleteLinks.forEach(function(link) {
                          link.addEventListener('click', function(event) {
                              // Prevent the default action of clicking the link
                              event.preventDefault();

                              // Ask for confirmation before proceeding
                              const confirmation = window.confirm("Are you sure you want to logout?");
                              
                              // If user confirms, navigate to the specified link
                              if (confirmation) {
                                  window.location.href = link.href;
                              }
                          });
                      });
                  });
                </script>
            </div>
          <!-- /.Card Body -->
          </form>
        </div>
 
 
<?php
    include('footer.php');
?>