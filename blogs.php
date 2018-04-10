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
          <div class="intro-lead-in">by <a class="js-scroll-trigger" href="#Randy Graves">Randy Graves</a></div>
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
                  <a class="js-scroll-trigger" href="#<?= $post["author"]; ?>"><?= $post["author"]; ?></a>
                  on <?= $post["date"]; ?></p>
              </div>
              <hr>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <section id="Randy Graves" class="bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About the Author</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="team-member">
              <div class="image" style="background-image: url('<?= $teamImgUri."randy.jpeg" ?>'"></div>
              <h4>Randolph A. Graves, Jr.</h4>
              <p class="text-muted">President, Graves Technology Inc.</p>
              <br>
              <p class="text-left">Dr. Graves has over 40 years experience in aerospace technology research, development, commercialization and management. He served for twenty-six years with NASA, finishing his career as the Director of the Aerodynamics Division in the Office of Aeronautics and Space Technology at NASA Headquarters. He has served on numerous managerial and technical panels and committees including being NASA’s member of the White House's Federal Coordinating Council on Science Engineering and Technology Subcommittee on High Performance Computing and as NASA's member of NATO's Advisory Group on Aerospace Research and Development, Fluid Dynamics Panel where he was Chairman of the Computational Fluid Dynamics Subcommittee.<br><br> Since leaving NASA, he has been the CEO and Chairman of several start-up companies and continues his technology consulting through Graves Technology Inc., a consulting company he founded in 1991 and has over the years assisted numerous clients in identifying, assessing, and evaluation technologies for commercialization. He has written over forty technology assessment analyses for international clients and completed a Grant from the Department of Energy on Software Technology Transfer.  Dr. Graves was awarded a Sloan Fellowship at Stanford University’s Graduate School of Business in 1982. During his career he has published over 60 scientific and technical reports, book sections, conference papers, and magazine articles. He is listed in the Oxford Who’s Who Elite Registry of Extraordinary Individuals, 1992-1993 and in the Sterling Who’s Who Executive Edition, 1994.</p>
            </div>
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
