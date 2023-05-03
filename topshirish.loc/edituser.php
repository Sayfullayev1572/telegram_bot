<?php

     include_once "server.php";

     session_start();

     $id = $_SESSION['id'];
     
     $select = "SELECT * FROM `signup` WHERE id='$id'";
     $query = $connect->query($select);
     $row = mysqli_fetch_assoc($query);

     if($_SERVER['REQUEST_METHOD'] == "POST"){
          $name = $_POST['name'];
          $last_name = $_POST['familiya'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];

          $update = "UPDATE signup SET `name`='$name', `last_name`='$last_name', `email`='$email', `phone`='$phone' WHERE id='$id'";
          $updquery = $connect->query($update);
          if($updquery == true){
               $message = "Ma'lumot yongilandi!";
          }
          else{
               $message = "Xato!";
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
          <? require_once "menu.php";?>
          <h1 class="text-center">
               M'lumotlarni tahrirlash
               <a class="btn btn-success" href="cabinet.php?id=<?=$row['id']?>"><i class="fa fa-user"></i></a>
          </h1>
          <div class="row mt-3">
               <div class="col-md-3"></div>
               <div class="col-md-6">
                    <form action="<? $_SERVER['PHP_SELF']?>" method="POST">
                    
                         <input type="text" class="form-control mb-3" name="name" value="<?=$row['name']?>" required>

                         <input type="text" class="form-control mb-3" name="familiya" value="<?=$row['last_name']?>" required>

                         <input type="email" class="form-control mb-3" name="email" value="<?=$row['email']?>" required>

                         <input type="text" class="form-control mb-3" name="phone" value="<?=$row['phone']?>" required>

                         <button  class="btn btn-primary">
                              Yangilash
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