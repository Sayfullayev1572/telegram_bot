<?php
     include_once "server.php";

     $id = $_GET['id'];

     if($_SERVER['REQUEST_METHOD'] == "GET"){
          $delete = "DELETE FROM signup WHERE id='$id'";

          $query = mysqli_query($connect, $delete);

          if($query == true){
               $message = "Ma'lumot o'chirildi";
          }
          else{
               $message = "Xato";
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
     <?
          include_once "menu.php";
     ?>

     <div class="container">
          <h1 class="text-success text-center">
               <?=$message?>
          </h1>
     </div>

     <?
          include_once "js.php";
     ?>
</body>
</html>