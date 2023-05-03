<?php
     session_start();
     
     require_once "server.php";

     $vaqt = date('Y.m.d h.i');

     $select = "SELECT * FROM send_not";

     $query = mysqli_query($con, $select);

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
               <h1 class="mt-3 mb-5 text-center">
                    There are Nb
               </h1>
               <?php
                    if(isset($_SESSION['status'])){
                         echo "<h4>".$_SESSION['status']."</h4>";
                         unset($_SESSION['status']);
                    }
               ?>
               <form action="index.php" method="POST">
                    <table class="table table-striped">
                         <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Last_name</th>
                              <th>Vaqt</th> 
                         </tr>
                         <?
                         $i = 1;
                         for($data = []; $row = mysqli_fetch_assoc($query); $data[] = $row){
                         ?>
                              <tr>
                                   <td><?=$i++?></td>
                                   <td><?=$row['name']?></td>
                                   <td><?=$row['last_name']?></td>
                                   <td><?=$vaqt?></td>
                              </tr>
                         <?
                         }
                         ?>
                    </table>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                         <button class="btn btn-primary me-md-2" name="checkbox" type="submit">Button</button>
                    </div>
               </form>
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