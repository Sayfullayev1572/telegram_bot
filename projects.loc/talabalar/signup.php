<?php
     include_once "../funksiyalar/db.php";

     if($_SERVER['REQUEST_METHOD'] == "POST"){
          $name = $_POST['name'];
          $last_name = $_POST['familiya'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $login = $_POST['login'];
          $pass = md5($_POST['pass']);
          $repass = md5($_POST['repass']);
          $rasm = $_POST['rasm'];

          $select = "SELECT * FROM talabalar WHERE `login`='$login'";
          $query = $connect->query($select);
          $row = mysqli_fetch_assoc($query);

          if($row['login'] !== $login){
               if($pass == $repass){
                    $add = "INSERT INTO talabalar(`ism`,`last_name`,`email`,`phone`,`login`,`password`,`rasm`) VALUES 
                    ('$name','$last_name','$email','$phone','$login','$pass','$rasm')";
                    $res = $connect->query($add);
                    if($res == true){
                         header("Location: kabinet.php");
                    }
                    else{
                         $message = "xato";
                    }
               }
               else{
                    $message = "Parollar teng emas!";
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
          include_once "../funksiyalar/css.php";
     ?>
</head>
<body>
     <div class="container">
          <h1 class="text-center mt-5">
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

                         <label for="formFileMultiple" class="form-label">Kabinet uchun rasm (Max = 10 Mb)</label>
                         
                         <input class="form-control" type="file" name="rasm" id="formFileMultiple" multiple>

                         <p class="text-muted mt-3">
                              <a href="./index.php" class="text-reset">Tizimga kirish</a>.
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
          include_once "../funksiyalar/css.php";
     ?>
</body>
</html>