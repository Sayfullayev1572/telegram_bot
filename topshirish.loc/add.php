<?php
     require_once "server.php";
     

     if($_SERVER['REQUEST_METHOD'] == "POST"){
          $name = $_POST['name'];
          $last_name = $_POST['last_name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $login = $_POST['login'];
          $password = md5($_POST['password']);

          $add = "INSERT INTO signup(`name`,`last_name`,`email`, `phone`, `login`,`password`) VALUE ('$name','$last_name','$email', '$phone','$login','$password')";
          
          $query = mysqli_query($connect, $add);

          if($query == true){
               $messages = "Ma'lumot bazaga yuborildi";
          }
          else{
               $messages = "Xato";
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
</head>
<body>

     <div class="container mt-4">
          <div class="row">
               <h1 class="text-center  mb-3">
                    Ma'lumot kiritish

               </h1>
               <div class="col-md-3">

               </div>
               <div class="col-md-6">
                    <form action="<?$_SERVER['PHP_SELF']?>" method="POST">                    

                         <input type="text" name="name" placeholder="ism" class="form-control mb-3" required>

                         <input type="text" name="last_name" placeholder="Familiyangiz" class="form-control mb-3" required>

                         <input type="email" name="email" placeholder="Emailingiz" class="form-control mb-3" required>

                         <input type="text" name="phone" placeholder="+123..." class="form-control mb-3" required>

                         <input type="text" name="login" placeholder="login" class="form-control mb-3" required>

                         <input type="password" name="password" placeholder="Parol" class="form-control mb-3" required>

                         
                         <button  class="btn btn-primary">
                              Yuborish
                         </button>

                    </form>
                    <h1>
                         <?=$messages?>
                    </h1>
               </div>
               <div class="col-md-3">

               </div>
          </div>
     </div>
     
     <?
          include_once "js.php";
     ?>
</body>
</html>