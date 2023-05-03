<?php
/*
     if($_SERVER['REQUEST_METHOD'] == "POST"){
          if(isset($_FILES['rasm']) && $_FILES['rasm']['error'] == 0){
               $type = ['jpg'=>'image/jpg', 'gif'=>'image/gif','jpeg'=>'image/jpeg','JPG'=>'image/jpg','JPEG'=>'image/jpeg','png'=>'image/png'];
               $imgname = $_FILES['rasm']['name'];
               $imgtype = $_FILES['rasm']['type'];
               
               $pathinof = pathinfo($imgname, PATHINOF_EXTENSION);
               if(!array_key_exists($pathinof, $type)) die ('Mavjud farmatda yuklang');
          }
     }

?>


<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Fayl yuklash</title>
     <?
          include_once "css.php";
     ?>
</head>
<body>
     <?
          include_once "menu.php";
     ?>

     <div class="container mt-4">
          <h1 class="text-success text-center">
               Fayl yuklash
          </h1>
          <form action="<? $_SERVER['PHP_SELF']?>" method="POST">
               <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                         <input type="text" class="form-control mb-3" name="name" placeholder="Filename">
                         <input type="file" class="form-control mb-3" name="rasm" >
                         <button  class="btn btn-primary">
                              Yuborish
                         </button>
                    </div>
               </div>
          </form>
     </div>

     <?
          include_once "js.php";
     ?>
</body>
</html>
*/