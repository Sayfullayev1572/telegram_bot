<?php

     include_once "server.php";
     session_start();

     if($_SERVER['REQUEST_METHOD'] == "POST"){
          $name = $_POST['name'];
          $last_name = $_POST['familiya'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $login = $_POST['login'];
          $pass = md5($_POST['pass']);
          $repass = md5($_POST['repass']);

          $select = "SELECT * FROM signup WHERE `login`='$login'";
          $res = $connect->query($select);
          $row = mysqli_fetch_assoc($res);
          
          if($row['login'] !== $login){
               if($pass == $repass){
                    $add = "INSERT INTO signup(`name`, `last_name`, `email`, `phone`, `login`,`password`) VALUE ('$name','$last_name','$email','$phone','$login','$pass')";
                    $query = $connect->query($add);
                    if($query == true){
                         $message="Siz ro'yhatdan o'tdingiz";
                    }
                    else{
                         $message="Siz ro'yhatdan o'tishda xato qildingiz";
                    }
               }
               else{
                    $message = "parol va takroriy parol teng emas";
               }
          }
          else{
               $message = "Login band!";
          }
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ro'yhatdan o'tish</title>
     <?
          include_once "css.php";
     ?>
</head>
<body>
     <div class="container">
          <h1 class="text-center">
               Ro'yhatdan o'tish
          </h1>
          <div class="row mt-3">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                    <form action="<? $_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
                    
                         <input type="text" class="form-control mb-3" name="name" placeholder="Ism" required>

                         <input type="text" class="form-control mb-3" name="familiya" placeholder="Familiya" required>

                         <input type="email" class="form-control mb-3" name="email" placeholder="Elektron pochta" required>

                         <input type="text" class="form-control mb-3" name="phone" placeholder="+123..." required>

                         <input type="text" class="form-control mb-3" name="login" placeholder="Login" required>

                         <input type="password" class="form-control mb-3" name="pass" placeholder="Parol" required>

                         <input type="password" class="form-control mb-3" name="repass" placeholder="Takroriy parol" required>

                         <p class="text-muted">
                              <a href="./login.php" class="text-reset">Tizimga kirish</a>.
                         </p>

                         <button  class="btn btn-primary">
                              Ro'yhatdan o'tish
                         </button>
                    </form>
                    <h1 class="mt-3">
                         <?=$message?>
                    </h1>
               </div>
          </div>
     </div>
     <?
          include_once "js.php";
     ?>
</body>
</html>