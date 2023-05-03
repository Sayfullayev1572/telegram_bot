<?php 
   $title = "Post";
   require "includes/header.php";
   require "database.php";

   $id = $_GET['id'];
   
   $statement = $pdo->prepare("SELECT * FROM `php-posts` WHERE id = ?");
   $statement->execute([$id]);
   $posts = $statement->fetch();

   // Ko'rishlar soni
   if(isset($_SESSION['views'])){
      
      $_SESSION['views'] = $_SESSION['views'] +1;
      $read_sql = "UPDATE `php-posts` SET `read` = {$_SESSION['views']} WHERE id = {$id}";
      $pdo->query($read_sql);
      
   }
   else{ 
      $_SESSION['views']=1;   
   }
   
?>
   <div class="container mt-5">
      <h1>Title: <?= $posts['title']?></h1>
      
      <p class="fs-5 col-md-8">
         Post: <?= $posts['body']?>
      </p>

      <div class="mb-5">
         Time: 
         <a class="btn-lg px-1"> <?= $posts['created_at']?></a>

         <br>

         Views: <!-- Ko'rishlar sonin -->
         <span class="badge rounded-pill bg-primary fs-base px-3 py-2 m-3">
            <i class="fa fa-eye me-1"><?= $_SESSION['views'] ?></i>
         </span>
      </div>
   </div>
<?php
   require 'includes/footer.php';
?> 