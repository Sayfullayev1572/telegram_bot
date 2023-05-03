<?php
     require_once "server.php";

     session_start();

     $id = $_GET['id'];

     $select = "SELECT * FROM `signup` WHERE id='$id'";
     $query = $connect->query($select);
     $row = mysqli_fetch_assoc($query);
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Bosh sahifa</title>
     <?
          include_once "css.php";
     ?>
</head>
<body>
<?php
require_once "menu.php";
if(isset($_SESSION['auth'])){
?>
     <div class="container-fluid ">
          <div class="container">
               <div class="row mt-5">
                    <div class="col-md-2">
                         <img src="./avatar-2027366__340.webp" alt="rasm bor" class="img-fluid" style="width: 12rem;">
                    </div>
                    <div class="col-md-5">
                         <h1><?=$row['name']?>  <?=$row['last_name']?></h1>
                         <h3><?=$row['email']?></h3>
                         <h2><?=$row['phone']?></h2>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                         <a href="edituser.php" class="btn btn-primary mt-3 mb-3">Ma'lumotlarni tahrirlash</a>
                         <a href="editpassword.php" class="btn btn-info">Parolni yangilash</a>
                    </div>
               </div>
          </div>
     </div>
<?
}
else{
     echo "<h1 class='text-center'>Tizimga kiring!</h1>";
}
include "js.php";
?>
</body>
</html>