<?php

include_once('config.php');

?><!DOCTYPE html>
<html lang="en">

  <head>
    <title>dub.works</title>
    <?php include_once('header.php');?>
    <link href="<?= $baseUrl ?>css/flip.css" rel="stylesheet">
  </head>

  <body id="page-top">

    <?php include_once('nav.php');?>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text bg" data-ibg-bg="<?= $baseUrl ?>img/table.jpg">
          <div class="intro-heading text-uppercase Iam">
            <span class="fixed"><span class="intro-heading-emph">dub</span><span class="color-secondary">.</span></span>
            <b class="color-secondary">
              <div class="innerIam">
                works<br /> 
                ideates<br />
                builds<br />
                creates<br />
                happens<br />
              </div>
            </b>
          </div>
        </div>
      </div>
    </header>

    <!-- About -->
    <section id="about" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">what we do</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <p class="vertical-center">
              The GW Innovation Center (Dub Works) in Tompkins Hall on the Foggy 
              Bottom campus is the first dedicated physical place for cross- 
              departmental and multidisciplinary innovation on campus. The 
              Dub Works provides a supportive climate for ideation, creativity and 
              entrepreneurial thinking; and it leverages existing resources to 
              engage students, faculty, staff, alumni, and leaders from the 
              community to address critical challenges.
            </p>
          </div>
          <div class="col-md-6">
            <img class="img-fluid" src="<?= $baseUrl ?>img/welcome.jpg" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img class="img-fluid" src="<?= $baseUrl ?>img/room.jpg" alt="">
          </div>
          <div class="col-md-6">
            <p class="vertical-center">
              The focal point of the 
              Dub Works is to facilitate knowledge transfer and acquisition of hands- 
              on skills, new domain exploration, interaction with peers from 
              other disciplines, alumni, and like-minded people. The Dub Works aids 
              discussions around disruptive ideas, exposure to art and affords 
              real-world opportunities for GW students aspiring to create value 
              for others.
            </p>
          </div>
        </div>
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
