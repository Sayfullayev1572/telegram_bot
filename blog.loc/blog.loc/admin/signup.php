<?php
session_start();   // session ni boshlash

if(isset($_SESSION['user'])){
    header("Location:all-posts.php");
    exit();
}

require_once('settings.php');

if(isset($_POST['signup-username']) &&
    isset($_POST['signup-email']) &&
    isset($_POST['signup-password']) &&
    isset($_POST['signup-password-confirm']))
{
    $user = $_POST['signup-username'];
    $email = $_POST['signup-email'];
    $password = $_POST['signup-password'];
    $passconfirm = $_POST['signup-password-confirm'];

    if ($passconfirm != $password){
        echo "Parollar birxil kiritilmadi!";
    }

    $signup_sql = "INSERT INTO users (login, password, email) values ('{$user}', '{$password}', '{$email}')";
    if ($conn->query($signup_sql)){
        header("Location:login.php");
        exit();
    }else{
        echo 'Akkaunt yaratishda qandaydir xatolik bo\'ldi.';
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="assets/css/dashmix.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>

<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="row g-0 justify-content-center bg-body-dark">
            <div class="hero-static col-sm-10 col-md-8 col-xl-6 d-flex align-items-center p-2 px-sm-0">
                <!-- Sign Up Block -->
                <div class="block block-rounded block-transparent block-fx-pop w-100 mb-0 overflow-hidden bg-image" style="background-image: url('assets/media/photos/photo12.jpg');">
                    <div class="row g-0">
                        <div class="col-md-6 order-md-1 bg-body-extra-light">
                            <div class="block-content block-content-full px-lg-5 py-md-5 py-lg-6">
                                <!-- Header -->
                                <div class="mb-2 text-center">
                                    <a class="link-fx fw-bold fs-1" href="index.html">
                                        <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                                    </a>
                                    <p class="text-uppercase fw-bold fs-sm text-muted">Yangi akkaunt yaratish</p>
                                </div>
                                <!-- END Header -->

                                <!-- Sign Up Form -->
                                <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-signup" action="signup.php" method="POST">
                                    <div class="mb-4">
                                        <input type="text" class="form-control form-control-alt" id="signup-username" name="signup-username" placeholder="Login">
                                    </div>
                                    <div class="mb-4">
                                        <input type="email" class="form-control form-control-alt" id="signup-email" name="signup-email" placeholder="Email">
                                    </div>
                                    <div class="mb-4">
                                        <input type="password" class="form-control form-control-alt" id="signup-password" name="signup-password" placeholder="Parol">
                                    </div>
                                    <div class="mb-4">
                                        <input type="password" class="form-control form-control-alt" id="signup-password-confirm" name="signup-password-confirm" placeholder="Parolni qayta kiriting">
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" class="btn w-100 btn-hero btn-primary">
                                            <i class="fa fa-fw fa-plus opacity-50 me-1"></i> Ro'yxatdan o'tish
                                        </button>
                                    </div>
                                </form>
                                <!-- END Sign Up Form -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Sign Up Block -->
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!--
  Dashmix JS

  Core libraries and functionality
  webpack is putting everything together at assets/_js/main/app.js
-->
<script src="assets/js/dashmix.app.min.js"></script>

<!-- jQuery (required for jQuery Validation plugin) -->
<script src="assets/js/lib/jquery.min.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/jquery-validation/jquery.validate.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/op_auth_signup.min.js"></script>
</body>
</html>
