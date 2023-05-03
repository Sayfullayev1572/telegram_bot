<?php 
  $title = "Blog";

  require "includes/header.php";

  require "database.php";

  $statement = $pdo->prepare("SELECT * FROM  `php-posts`");
  $statement->execute();
  $posts = $statement->fetchAll();

  if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['DELTE'])){
    $post_id = $_POST['post_id'];

    $statement = $pdo->prepare("DELETE FROM `php-posts` WHERE id = ?");
    $statement->execute([$post_id]);

    $_SESSION['post-ochirildi'] = "Post muvaffaqqiyatli o'chirlidi";

    header("Location: blog.php");

    exit;
  }

?>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Bizning blog</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <a href="post-create.php" class="btn btn-primary my-2">Post yaratish </a>
          <a href="#" class="btn btn-secondary my-2">Bosh sahifa</a>
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">
      <!--SESSSION -->
        <!--post yaratilganda session-->
        <?php if(isset($_SESSION['post-yaratildi'])): ?>
          <div class="alert alert-success" role="alert">
            <?= $_SESSION['post-yaratildi'] ?>
            <?php unset($_SESSION['post-yaratildi']) ?>
          </div>
        <?php endif; ?>
          <!--ochirilganda session-->
        <?php if(isset($_SESSION['post-ochirildi'])): ?>
          <div class="alert alert-danger" role="alert">
            <?= $_SESSION['post-ochirildi'] ?>
            <?php unset($_SESSION['post-ochirildi']) ?>
          </div>
        <?php endif; ?>
          <!--tahrirlanganda session-->
        <?php if(isset($_SESSION['post-ozgartirish'])): ?>
          <div class="alert alert-primary" role="alert">
            <?= $_SESSION['post-ozgartirish'] ?>
            <?php unset($_SESSION['post-ozgartirish']) ?>
          </div>
        <?php endif; ?>
      <!--end SESSSION -->
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php foreach($posts as $post): ?>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

              <div class="card-body">
                <a href="post.php?id=<?= $post['id'] ?>">
                  <h5><?= $post['title'] ?></h5>
                </a>
                <p class="card-text"><?= $post['body']?></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <!-- Postni edit qismi-->
                    <a href="post-edit.php?id=<?= $post['id'] ?>" class="btn btn-sm btn-outline-secondary">
                      Edit
                    </a>
                    <!-- Postni o'chirish qismi-->
                    <form action="<?$_SERVER['PHP_SELF']?>" method="POST" onSubmit="return confirm('Rostan ham o\'chirmoqchimisiz');">
                      <input type="hidden" name="post_id" value="<?= $post['id']?>">
                      <input type="hidden" name="DELTE">
                      <button type="submit" class="btn btn-sm btn-outline-secondary">Delete</button>
                    </form>
                  </div>
                  <small class="text-muted"><?= $post['created_at']?></small>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

<?php 
 require "includes/footer.php";
?>