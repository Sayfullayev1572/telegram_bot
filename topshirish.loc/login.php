<?php
     session_start();

     include_once "server.php";

     if($_SERVER['REQUEST_METHOD'] == "POST"){
          $login = $_POST['login'];
          $pass = md5($_POST['pass']);

          $select = "SELECT * FROM signup WHERE `login` = '$login'";
          $query = $connect->query($select);
          $row = mysqli_fetch_assoc($query);

          if(!empty($login) && !empty($pass)){
               if($login == $row['login']){
                    if($row['password'] == $pass){
                         $_SESSION['auth'] = true;
                         $_SESSION['id'] = $row['id'];
                         header('location: index.php');
                    }
                    else{
                         $message = "Parol xato";
                    }
               }
               else{
                    $message = "Login xato";
               }

          }
          else{
               $message = "Login va parolni kiriting!";
          }
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <?
          include_once "css.php";
     ?>
     <style>
          .row{
               height: 100vh;
               align-items: center;
          }
     </style>
</head>
<body>
     <div class="container">
          <div class="row">
               <div class="col-md-4">

               </div>
               <div class="col-md-4">
                    <h1 class="text-center text-danger">
                         Tizimga kirish
                    </h1>
                    <form action="<?$_SERVER['PHP_SELF']?>" method="POST">
                         <input type="text" placeholder="Login" name="login" class="form-control mb-3">

                         <input type="password" placeholder="Parol" name="pass" class="form-control mb-3">

                         <p class="text-muted">
                              <a href="./signup.php" class="text-reset">Ro'yhatdan o'tish</a>.
                         </p>

                         <button class="btn btn-primary">
                              Tizimga kirish
                         </button>
                         <h3 class="text-center text-danger">
                              <?=$message?>
                         </h3>
                    </form>
               </div>
          </div>
     </div>
     <?
          include_once "js.php";
     ?>
</body>
</html>