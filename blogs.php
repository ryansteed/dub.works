<?php

include_once('config.php');
$thisUrl = $baseUrl . 'blog.php'

?><!DOCTYPE html>
<html lang="en">

  <head>
    <?php include_once('header.php');?>
    <title>Dub Works - Outside the Box</title>
    <link href="<?= $baseUrl ?>css/clean-blog.css" rel="stylesheet">
  </head>

  <body>

    <?php include_once('nav.php'); ?>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading text-uppercase">Outside the Box</div>
          <div class="intro-lead-in">by Randy Graves</div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <section id="posts" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php foreach($posts as $key => $post):?>
              <div class="post-preview">
                <a href="<?= $basePostUrl ?>/<?= $post["file"] ?>">
                  <h2 class="post-title">
                    <?= $post["title"]; ?>
                  </h2>
                  <h3 class="post-subtitle">
                    <?= $post["blog"]; ?>, Column <?php echo count($posts)-$key; ?>
                  </h3>
                </a>
                <p class="post-meta">Posted by
                  <a href="#"><?= $post["author"]; ?></a>
                  on <?= $post["date"]; ?></p>
              </div>
              <hr>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>

    <?php include_once('contact_us.php');?>

    <?php include_once('footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/main.js"></script>

  </body>

</html>
