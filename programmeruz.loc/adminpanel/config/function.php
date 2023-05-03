<?php
     session_start();

     function register($data = []){

          global $connection;

          if(isset($data['first_name'], $data['last_name'], $data['email'], $data['password'])){

               $sql = "INSERT INTO users (name, surname, email, password) 
               VALUES ('${data['first_name']}','${data['last_name']}','${data['email']}','${data['password']}')";

               if(query($sql)){

                    setSession([
                    "success" => TRUE,
                    "message" => "User is registered",
                    ]);

                    header("Location: " . SITE_URL);
               }    
          }
          

     }

     function query($sql){

          global $connection;

          if($connection->query($sql) === TRUE){
               return $connection;
          }
          else{
               echo $connection;
               return FALSE;
          }
     }

     function setSession($data){
          foreach($data as $key => $value){
               $_SESSION[$key] = $valuve;
          }
     }

     function unsetSession($data){
          foreach($data as  $value){
               unset($_SESSION[$value]);
          }
     }

?>