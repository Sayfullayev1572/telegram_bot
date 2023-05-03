<?php
     include_once "../funksiyalar/db.php";

     if($_SERVER['REQUEST_METHOD'] == "POST"){
          $login  = $_POST['login'];
          $pass = md5($_POST['pass']);

          $select = "SELECT * FROM talabalar WHERE `login`='$login'";
          $query = $connect->query($select);
          $row = mysqli_fetch_assoc($query);
          
          if($row['login'] == $login){
               if($row['password'] == $pass){
                    header("Location: kabinet.php");
               }
               else{
                    $message = "Parol xato!";
               }
          }
          else{
               $message = "Login topilmadi!";
          }

     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Tizimga kirish</title>
     <?
          include_once "../funksiyalar/css.php";
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
                         <input type="text" placeholder="Login" name="login" class="form-control mb-3" required>

                         <input type="password" placeholder="Parol" name="pass" class="form-control mb-3" required>

                         <p class="text-muted">
                              <a href="./signup.php" class="text-reset">Ro'yhatdan o'tish</a>
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
          include_once "../funksiyalar/js.php";
     ?>
</body>
</html>