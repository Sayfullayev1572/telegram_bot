<?php
   require_once 'config/bootstrap.php';

   if($_SERVER['REQUEST_METHOD'] == "POST"){
      $title = $_POST['title'];
      $body = $_POST['body'];

      $result = Post::create($title, $body);

      if($result == 1){
         header("Location: index.php");
         exit;
      }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create Post</title>
   <?
      require_once 'css.php';
   ?>
</head>
<body>
   <div class="container mt-5">
      <div class="row">
         <div class="col-lg-3"></div>
         <div class="col-lg-6">
            <form action="<?$_SERVER['PHP_SELF']?>" method="POST">
               <h1 class="text-center">Create</h1>
               <div class="mb-4">
                  <label for="exampleFormControlInput1" class="form-label">Post mazmuni</label>
                  <input type="text" name="title" class="form-control" id="exampleFormControlInput1" >
               </div>
               <div class="mb-4">
                  <label for="exampleFormControlTextarea1" class="form-label">Post</label>
                  <textarea class="form-control" name="body" id="exampleFormControlTextarea1" rows="6"></textarea>
               </div>
               <button type="submit" class="btn btn-secondary">Yuborish</button>
            </form>
         </div>
         <div class="col-lg-3"></div>
      </div>
   </div>
   <?
      require_once 'js.php';
   ?>
</body>
</html>