<?php
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
               <h1 class="mt-3 mb-5 text-center">
                    Send off
               </h1>
               <div class="col-md-6 mb-5">
                    <button type="button" class=" btn-primary">
                         <a href="add.php" style="color: #fff; text-decoration: none;">
                              Enter information
                         </a>
                    </button>
               </div>
               <form action="send_not.php" method="POST">
                    <table class="table table-striped">
                         <tr>
                              <th>ID</th>
                              <th>Name</th>
                              <th>Last_name</th> 
                              <th>NB</th>
                         </tr>
                         <?
                         $i = 1;
                         for($data = []; $row = mysqli_fetch_assoc($query); $data[] = $row){
                         ?>
                              <tr>
                                   <td><?=$i++?></td>
                                   <td><?=$row['name']?></td>
                                   <td><?=$row['last_name']?></td>
                                   
                                   <td>
                                        <input class="form-check-input" value="<?=$row['id']?>" type="checkbox" name="flexRadioDefault[]" id="flexRadioDefault1">
                                   </td>
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