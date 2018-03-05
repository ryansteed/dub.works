<?php
  include_once('config.php');
  header('Content-Type: text/html');
?><!DOCTYPE html>
<html lang="en">

  <head>
    <?php 
      error_reporting(E_ERROR | E_WARNING | E_PARSE); //Dev
      include_once("header.php");

      $post = $json_data;
    ?>
    <title>Dub Works - <?= $post["blog"] ?> - 2/19/18</title>
    <link href="<?= $baseUrl ?>css/post.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?= $baseUrl ?>">Dub Works</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= $baseUrl ?>blog.php">More Posts</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: none;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1><?= $post["title"] ?></h1>
              <h2 class="subheading"><?= $post["blog"] ?></h2>
              <span class="meta">Posted by
                <a href="#"><?= $post["author"] ?></a>
                on <?= $post["date"] ?></span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?= $post["html"] ?>
          </div>
        </div>
      </div>
    </article>

    <hr>

    <?php include_once('footer.php'); ?>

  </body>

</html>
