<?php

include_once('config.php');

?><!DOCTYPE html>
<html lang="en">

  <head>
    <title>Dub Works</title>
    <?php include_once('header.php');?>
  </head>

  <body id="page-top">

    <?php include_once('nav.php');?>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in"></div>
          <div class="intro-heading text-uppercase"></div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="https://docs.google.com/forms/d/1p4G9Eyc0JvHDHyVg-vMeMfsZgB-XzXiNyk-Lq89oQ-Y/edit?ts=5a79f 087">Get Funded</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">IC Incubator</h2>
            <h3 class="section-subheading text-muted">alumni-sponsored seed fund for student startups</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <a href="https://docs.google.com/forms/d/1p4G9Eyc0JvHDHyVg-vMeMfsZgB-XzXiNyk-Lq89oQ-Y/edit?ts=5a79f087">
                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                <i class="fa fa-flask fa-stack-1x fa-inverse btn-tertiary"></i>
              </a>
            </span>
            <h4 class="service-heading">apply</h4>
            <p class="text-muted">funding, expert advice, and startup support from the GW Innovation Center</p>
          </div>
          <div class="col-md-4">
          </div>
        </div>
      </div>
    </section>

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
            <img class="img-fluid" src="img/welcome.jpg" alt="">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <img class="img-fluid" src="img/room.jpg" alt="">
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

  </body>

</html>
