<?php
include('../autoloader.php');

if(isset($_SESSION['cook'])){
    header("Location: dashboard.php");
}

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    
            
    if( $email == null || $password == null ){
        $link = $loader->getLink('sign-in.php');
        echo "<script>alert('All Fields Required'); window.location.href='".$link."'</script>";
    }
    
        $msg = mysqli_query($con, "SELECT * FROM `chefs` WHERE `email` = '$email' AND `password` = '$password' ");
        $rtn = mysqli_fetch_array($msg);
   
    if($rtn > 0){
        $link = $loader->getLink('dashboard.php');
        $_SESSION['cook'] = $rtn;
        echo "<script>alert('Login Successful'); window.location.href='".$link."'</script>";
    }else{
       $link =  $loader->getLink('sign-in.php');
        echo "<script>alert('Invalid Credentials'); window.location.href='".$link."'</script>";
    }
    
}


?>


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicon icon-->
    <link rel="icon" href="/img/core-img/favicon.ico">


    <!-- Libs CSS -->
    <link href="../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/css/theme.min.css">
    <link rel="canonical" href="sign-in.php">
    <title>Sign in || Recipe Assessment</title>
</head>

<body>
    <!-- Page content -->
    <main>
        <section class="container d-flex flex-column vh-100">
            <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
                <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                    <!-- Card -->
                    <div class="card shadow">
                        <!-- Card body -->
                        <div class="card-body p-6">
                            <div class="mb-4">
                                <a class="pb-3 d-flex justify-content-center align-items-center" href="/"><img src="/img/core-img/salad.png" height="70" alt="logo" /><span class="mx-3 text-success display-6 fs-2 fw-bold">Delicious</br><span class="text-secondary">Food Blog</span></span></a>
                                <h1 class="mb-1 fw-bold">Cook Sign in</h1>
                                <span>
                                    Don’t have an account?
                                    <a href="sign-up.php" class="ms-1">Sign up</a>
                                </span>
                            </div>
                            <!-- Form -->
                            <form class="needs-validation" method="POST" action="" novalidate>
                                <!-- Username -->
                                <div class="mb-3">
                                    <label for="email" class="form-label"> Email </label>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" required>
                                    <div class="invalid-feedback">Please enter valid email.</div>
                                </div>
                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" placeholder="**************" required>
                                    <div class="invalid-feedback">Please enter valid password.</div>
                                </div>
                               
                                <div>
                                    <!-- Button -->
                                    <div class="d-grid">
                                        <button type="submit" name="submit" class="btn btn-success">Sign in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Scripts -->
    <!-- Libs JS -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Theme JS -->
    <script src="../assets/js/theme.min.js"></script>
    <script src="../assets/js/vendors/validation.js"></script>

</body>
</html>