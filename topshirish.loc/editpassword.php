<?php
     require_once "server.php";
     session_start();
     $id = $_SESSION['id'];

     if($_SERVER['REQUEST_METHOD'] == "POST"){
          $oldpass = md5($_POST['oldpass']);
          $newpass = $_POST['newpass'];
          $respass = $_POST['respass'];

          $select = "SELECT * FROM `signup` WHERE `id`='$id'";
          $query = $connect->query($select);
          $row = mysqli_fetch_assoc($query);

          if($row['password'] == $oldpass){
               if($newpass == $respass){
                    $heshpass = md5($newpass);
                    $updpass = "UPDATE signup SET `password`='$heshpass' WHERE id='$id'";
                    $updquery = $connect->query($updpass);
                    if($updquery == true){
                         $message = "Parol yangilandi";
                    }
                    else{
                         $message = "Xato!"; 
                    }
               }
               else{
                    $message = "Parollar teng emas";
               }
          }
          else{
               $message = "Joriy parol xato!";
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
      require_once "css.php"
     ?>
</head>
<body>
     <div class="conteiner mt-5">
          <div class="row">
                    <h1 class="text-center text-danger">
                         Parolni yangilash
                    </h1>
               <div class="col-md-4">

               </div>
               <div class="col-md-4">
                    <form action="<?$_SERVER['PHP_SELF']?>" method="POST">
                         <input type="password" class="form-control mb-5" name="oldpass" placeholder="Eski parol">
                         <input type="password" class="form-control mb-3" name="newpass" placeholder="Yangi parol" required>
                         <input type="password" class="form-control mb-3" name="respass" placeholder="Takroriy parol" required>
                         <button class="btn btn-success">
                              Yangilash
                         </button>
                    </form>
                    <h2>
                         <?=$message?>
                    </h2>
                    
               </div>
          </div>
     </div>

     <?
      require_once "js.php"
     ?>
</body>
</html>