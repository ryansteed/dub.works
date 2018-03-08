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

    <?php include_once('nav.php'); ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: none;">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto" style="text-align:center">
            <div class="post-heading">
              <h1><?= $post["title"] ?></h1>
              <h2 class="subheading"><?= $post["blog"] ?></h2>
              <span class="meta">Posted by
                <a href="#"><?= $post["author"] ?></a>
                on <?= $post["date"] ?></span>
            </div>
          </div>
        </div>
        <hr>
      </div>
    </header>

    <!-- Post Content -->
    <article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <?php include_once($postsPath."/".$post["html"]) ?>
          </div>
        </div>
      </div>
    </article>

    <hr>

    <?php include_once('footer.php'); ?>

  </body>

</html>
