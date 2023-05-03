<?php
     require_once "server.php";

     $id = $_GET['id'];

     if(isset($id)){
          $select = "SELECT * FROM signup WHERE id='$id'";
          $query = $connect->query($select);
          $row = mysqli_fetch_assoc($query);
     }

     if($_SERVER['REQUEST_METHOD'] == "POST"){
          $name = $_POST['name'];
          $last_name = $_POST['last_name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $login = $_POST['login'];
          $password = md5($_POST['password']);

          $update = "UPDATE signup SET name='$name', last_name='$last_name', email='$email', phone='$phone', login='$login', password='$password' WHERE `id`='$id'";
          
          $res = $connect->query($update);

          if($res == true){
               $messages = "Ma'lumot bazada yangilandi";
          }
          else{
               $messages = "Xato";
          }
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Ma'lumot yangilash</title>
     <?
          include_once "css.php";
     ?>
</head>
<body>
<?php
     require_once "menu.php";    
?>
     
     <div class="container mt-4">
          <div class="row">
               <h1 class="text-center  mb-3">
                    Ma'lumot yangilash
               </h1>
               <div class="col-md-3">

               </div>
               <div class="col-md-6">
                    <form action="<?$_SERVER['PHP_SELF']?>" method="POST">                    

                         <input type="text" name="name" placeholder="Name" class="form-control mb-3" value="<?=$row['name']?>">

                         <input type="text" name="last_name" placeholder="Familiyangiz" class="form-control mb-3" value="<?=$row['last_name']?>">

                         <input type="email" name="email" placeholder="Emailingiz" class="form-control mb-3" value="<?=$row['email']?>">

                         <input type="text" name="phone" placeholder="+123..." class="form-control mb-3" value="<?=$row['phone']?>">

                         <input type="text" name="login" placeholder="Login" class="form-control mb-3" value="<?=$row['login']?>">

                         <input type="password" name="password" placeholder="Parol" class="form-control mb-3" value="<?=$row['password']?>">

                         
                         <button  class="btn btn-primary">
                              Yangilash
                         </button>

                    </form>
                    <h1>
                         <?=$messages?>
                    </h1>
               </div>
               <div class="col-md-3">

               </div>
          </div>
     </div>
<?
     include_once "js.php";
?>
</body>
</html>