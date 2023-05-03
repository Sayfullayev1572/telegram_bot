<?php
     define("DB_USER", "root");
     define("DB_PASS", "");
     define("DB_NAME", "talabalar");
 
     global $connection;

     $connection = mysqli_connect("localhost", DB_USER, DB_PASS, DB_NAME);
 
     if($connection->connect_error){
         echo $connection->connect_error;
         exit();
     }
 
     require_once "funksiya.php";
     // $sql = "SELECT * FROM user_details";
 
     // $object = query($sql);
 
     // print_r(fetchAll($object));
?>