<?php 
   $title = "Bosh sahifa";
   require "includes/header.php";

   require "database.php";

  $statement = $pdo->prepare("SELECT * FROM  `php-posts`");
  $statement->execute();
  $posts = $statement->fetchAll();

?>
   <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
         <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
         <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
         <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
         <div class="carousel-item active">
         <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
         <div class="container">
            <div class="carousel-caption text-start">
               <h1>Example headline.</h1>
               <p>Some representative placeholder content for the first slide of the carousel.</p>
               <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
         </div>
         </div>
         <div class="carousel-item">
         <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
         <div class="container">
            <div class="carousel-caption">
               <h1>Another example headline.</h1>
               <p>Some representative placeholder content for the second slide of the carousel.</p>
               <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
         </div>
         </div>
         <div class="carousel-item">
         <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
         <div class="container">
            <div class="carousel-caption text-end">
               <h1>One more for good measure.</h1>
               <p>Some representative placeholder content for the third slide of this carousel.</p>
               <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
         </div>
         </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
      </button>
   </div>


   <!-- Marketing messaging and featurettes
   ================================================== -->
   <!-- Wrap the rest of the page in another container to center all the content. -->

   <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
         <?php foreach($posts as $post): ?>
            <div class="col-lg-4">
               <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
               <a href="post.php?id=<?= $post['id'] ?>">
                  <h5><?= $post['title']?></h5>
               </a>
               <p><?= $post['created_at']?></p>
            </div><!-- /.col-lg-4 -->
         <?php endforeach;?>
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <div class="row featurette">
         <?php foreach($posts as $post): ?>
            <div class="col-md-7">
               <h3 class="featurette-heading fw-normal lh-1"><?= $post['title']?></h3>
               <p class="lead"><?= $post['body']?></p>
            </div>
            <div class="col-md-5">
               <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="450" height="450" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
            </div>
         <?php endforeach; ?>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

   </div><!-- /.container -->
<?php
   require 'includes/footer.php';
?> 


