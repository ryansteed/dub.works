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
              <a class="nav-link js-scroll-trigger" href="../blog.html">More Posts</a>
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

    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; GW Innovation Center 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/gwinnocenter">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/gwinnovationcenter/">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://join.slack.com/t/dubworks/signup">
                  <i class="fa fa-slack"></i>
                </a>
              </li>
            </ul>
          </div>
          <!-- <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div> -->
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="../js/main.js"></script>

  </body>

</html>
