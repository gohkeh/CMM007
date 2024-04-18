<?php

session_start();

include ('../config.php');

if(isset($_SESSION['admin'])){
    header('Location: dashboard.php');
}

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $msg = mysqli_query($conn, "SELECT * FROM `admins` WHERE `email` = '$email' AND `password` = '$password' ");
    $rtn = mysqli_fetch_array($msg);
    if($rtn > 0){
        $_SESSION['admin'] = $rtn;
        $extra = "dashboard.php";
        $host = $_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        $link = "http://$host$uri/$extra";

        echo "<script>window.location.href='".$link."'</script>";
    }else{

        $extra = "login.php?serror=invalid credentials";
        $host = $_SERVER['HTTP_HOST'];
        $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
        $link = "http://$host$uri/$extra";

        echo "<script>window.location.href='".$link."'</script>";

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
    <title> Delicious Food || Admin Page</title>
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
                                <h1 class="mb-1 fw-bold">Admin Sign in</h1>
                                
                            </div>
                            <!-- Form -->
                            <form class="needs-validation" method="POST" action="" novalidate>
                                
                                <?php if( isset($_GET['serror']) ) { ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong><?=  $_GET['serror']; ?></strong>
                                    </div>
                                <?php } ?>
                                
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