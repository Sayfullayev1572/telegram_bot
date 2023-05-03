<?php
require_once('settings.php');
session_start();   // session ni boshlash

if(isset($_SESSION['user']))  // avtorizatsiyadan o'tganligni tekshirsh
    // o'tgan bo'lsa all-posts.php ga yuborish
{
    header("Location:all-posts.php");
    exit();
}

if(isset($_POST['login-username']) && isset($_POST['login-password']))  // login parol kiritilganligini tekshirish
{
    $user = $_POST['login-username'];
    $pass = $_POST['login-password'];

    $login_sql = "SELECT * FROM users WHERE login = '{$user}' limit 1";
    $result = $conn->query($login_sql);
    $result = mysqli_fetch_assoc($result);

    if($user == $result['login'] && $pass == $result['password']) // login va parolni tekshirish
    {
        $_SESSION['user'] = $user;
        header("Location:all-posts.php"); //  logindan keyin home.php ga yuborish
        exit();
    } else {
        echo "Login yoki parol xato";
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

</head>
<body>

<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo22@2x.jpg');">
            <div class="row g-0 bg-primary-op">
                <!-- Main Section -->
                <div class="hero-static col-md-6 d-flex align-items-center bg-body-extra-light">
                    <div class="p-3 w-100">
                        <!-- Header -->
                        <div class="mb-3 text-center">
                            <a class="link-fx fw-bold fs-1" href="index.html">
                                <span class="text-dark">Dash</span><span class="text-primary">mix</span>
                            </a>
                            <p class="text-uppercase fw-bold fs-sm text-muted">Admin paneliga kirish</p>
                        </div>
                        <!-- END Header -->

                        <!-- Sign In Form -->
                        <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                        <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                        <div class="row g-0 justify-content-center">
                            <div class="col-sm-8 col-xl-6">
                                <form class="js-validation-signin" action="login.php" method="POST">
                                    <div class="py-3">
                                        <div class="mb-4">
                                            <input type="text" class="form-control form-control-lg form-control-alt" id="login-username" name="login-username" placeholder="Login">
                                        </div>
                                        <div class="mb-4">
                                            <input type="password" class="form-control form-control-lg form-control-alt" id="login-password" name="login-password" placeholder="Parol">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <button type="submit" class="btn w-100 btn-lg btn-hero btn-primary">
                                            <i class="fa fa-fw fa-sign-in-alt opacity-50 me-1"></i> Kirish
                                        </button>
                                        <p class="mt-3 mb-0 d-lg-flex justify-content-lg-between">
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="forgot.php">
                                                <i class="fa fa-exclamation-triangle opacity-50 me-1"></i> Parolni unutdim
                                            </a>
                                            <a class="btn btn-sm btn-alt-secondary d-block d-lg-inline-block mb-1" href="signup.php">
                                                <i class="fa fa-plus opacity-50 me-1"></i> Akkaunt yaratish
                                            </a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- END Sign In Form -->
                    </div>
                </div>
                <!-- END Main Section -->

                <!-- Meta Info Section -->
                <div class="hero-static col-md-6 d-none d-md-flex align-items-md-center justify-content-md-center text-md-center">
                    <div class="p-3">
                        <p class="display-4 fw-bold text-white mb-3">
                            Xush kelibsiz!
                        </p>
                        <p class="fs-lg fw-semibold text-white-75 mb-0">
                            Copyright &copy; <span data-toggle="year-copy"></span>
                        </p>
                    </div>
                </div>
                <!-- END Meta Info Section -->
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
<script src="assets/js/pages/op_auth_signin.min.js"></script>
</body>
</html>
