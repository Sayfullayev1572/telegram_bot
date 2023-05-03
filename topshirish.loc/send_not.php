<?php
     require_once "server.php";
     session_start();
     
     if(isset($_POST['checkbox'])){

          $id = $_POST['flexRadioDefault'];

          foreach( $id as $item){
               $sql = "SELECT * FROM `signup` WHERE id='$item'";
               $select = $connect->query($sql);
               $row = mysqli_fetch_assoc($select);
               $name = $row['name'];
               $last_name = $row['last_name'];
               $query = "INSERT INTO `send_not` (`name`, `last_name`) VALUES ('$name', '$last_name');";
               $result = $con->query($query);
          }
          
          if($result){
               $_SESSION['status'] = "Ma'lumot bazaga yuborildi!";
               header("Location: nb.php");
          }
          else{
               $_SESSION['status'] = "Xato!";
               header("Location: send_off.php");
          }
          
     }


?>