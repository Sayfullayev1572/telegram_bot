<?php
     require_once "../config/db.php";

     $method = $_POST["method"];
     if(function_exists($method)){
          $method($_POST);
     }else{
          return header ("Location: " . SITE_URL);
     }
?>