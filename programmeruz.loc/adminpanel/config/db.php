<?php
    session_start();

     define("SITE_URL", "http://programmeruz.loc/adminpanel");

     define("SERVER_NAME", "localhost");
     define("DB_USER", "root");
     define("DB_PASS", "");
     define("DB_NAME", "user");

     // Create connection
     $connection = new mysqli(SERVER_NAME, DB_USER, DB_PASS, DB_NAME);

     // Check connection
     if ($connection->connect_error) {
          die("Connection failed: " . $connection->connect_error);
     }
     
     require_once "function.php";


?>