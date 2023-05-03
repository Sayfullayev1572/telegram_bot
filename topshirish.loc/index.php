+4<?php
     session_start();
     require_once "server.php";

     $select = "SELECT * FROM signup";

     $query = mysqli_query($connect, $select);

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
               <h1 class="mb-5 text-center">
                    Information
               </h1>
               <div class="row">
                    <div class="col-md-2 mb-5">
                         <button type="button" class=" btn-primary">
                              <a href="add.php" style="color: #fff; text-decoration: none;">
                                   Enter information
                              </a>
                         </button>
                    </div>
                    <div class="col-md-2">
                         <button type="button" class=" btn-primary">
                              <a href="send_off.php" style="color: #fff; text-decoration: none;">
                                   send off
                              </a>
                         </button>
                    </div>
                    <div class="col-md-2">
                         <button type="button" class=" btn-primary">
                              <a href="nb.php" style="color: #fff; text-decoration: none;">
                                   There are Nb
                              </a>
                         </button>
                    </div>
               </div>

               <table class="table table-striped">
                    <tr>
                         <th>ID</th>
                         <th>Name</th>
                         <th>Last_name</th>
                         <th>Email</th>
                         <th>Phone</th>
                         <th>Login</th>
                         <th>Pass</th> 
                         <th>Del</th><!--Ma'lumotni o'chirish-->
                         <th>Upd</th><!--Ma'lumotni yangilash--> 
                         <th>C/t</th>                      
                    </tr>
                    <?
                    $i = 1;
                    for($data = []; $row = mysqli_fetch_assoc($query); $data[] = $row){
                    ?>
                         <tr>
                              <td><?=$i++?></td>
                              <td><?=$row['name']?></td>
                              <td><?=$row['last_name']?></td>
                              <td><?=$row['email']?></td>
                              <td><?=$row['phone']?></td>
                              <td><?=$row['login']?></td>
                              <td><?=$row['password']?></td>
                              <td><a class="btn btn-danger" href="delete.php?id=<?=$row['id']?>"><i class="fa fa-trash"></i></a></td>
                              <td><a class="btn btn-success" href="update.php?id=<?=$row['id']?>"><i class="fa fa-edit"></i></a></td>
                              <td><a class="btn btn-success" href="cabinet.php?id=<?=$row['id']?>"><i class="fa fa-user"></i></a></td></td>
                         </tr>
                    <?
                    }
                    ?>
               </table>
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