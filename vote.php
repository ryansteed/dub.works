<?php

include_once('config.php');

?><!DOCTYPE html>
<html lang="en">

  <head>
    <title>dub.works</title>
    <?php include_once('header.php');?>
    <link href="<?= $baseUrl ?>css/flip.css" rel="stylesheet">
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </head>

  <body id="page-top">

    <?php include_once('nav.php');?>
    <section class="bg">
    <div class="container text-center">
      <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSds1z_PgXrdvWoreVDUwRFRAtaCSb22Wfid-Rh7zd2MDTaLUw/viewform?usp=sf_link" width="100%" height="1100px" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
    </div>
    </section>
    
    <?php include_once('contact_us.php'); ?>
    <?php include_once('footer.php');?>

    <!-- <script src="<?= $baseUrl ?>js/interactive-bg.min.js"></script>
    <script>
      $(".bg").interactive_bg({
       strength: 25,
       scale: 1.05,
       animationSpeed: "100ms",
       contain: true,
       wrapContent: false
      });
    </script> -->

  </body>

</html>
