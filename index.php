<?php

include_once('config.php');

?><!DOCTYPE html>
<html lang="en">

  <head>
    <title>Dub Works</title>
    <?php include_once('header.php');?>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?= $baseUrl ?>#page-top">Dub Works</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= $baseUrl ?>#services">Incubator</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Projects</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= $baseUrl ?>#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= $baseUrl ?>#events">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?= $baseUrl ?>#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= $baseUrl ?>blog.php">Blog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in"></div>
          <div class="intro-heading text-uppercase"></div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="https://docs.google.com/forms/d/1p4G9Eyc0JvHDHyVg-vMeMfsZgB-XzXiNyk-Lq89oQ-Y/edit?ts=5a79f087">Get Funded</a>
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

    <section id="events">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Events</h2>
            <h3 class="section-subheading text-muted">coming up in Tompkins M06</h3>
          </div>
        </div>
        <div class="row">
          <iframe src="https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=csp8dpd2enffr9jn1j9rva2htc%40group.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Reach out to our co-director and chief evangelist, Annamaria Konya-Tannon, at <a href="mailto:annamaria@email.gwu.edu">annamaria@gwu.edu</a>.</h3>
          </div>
        </div>
      </div>
    </section>

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
