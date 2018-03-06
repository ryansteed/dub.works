<?php

include_once('config.php');

?><!DOCTYPE html>
<html lang="en">

  <head>
    <title>dub.funds</title>
    <?php include_once('header.php');?>
  </head>

  <body id="page-top">
    <?php include_once('nav.php');?>

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
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="https://docs.google.com/forms/d/1p4G9Eyc0JvHDHyVg-vMeMfsZgB-XzXiNyk-Lq89oQ-Y/edit?ts=5a79f 087">Get Funded</a>
          </div>
          <div class="col-md-4">
          </div>
        </div>
      </div>
    </section>

    <section id="process" class="bg-light">
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Apply for Seed Funding</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">take advantage of microfunding for rapid product prototyping, expert advice, and startup support from the GW Innovation Center</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="subheading">Status Update</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">apply to GWIC alumni board for funding increase</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <?php include_once('contact_us.php'); ?>
    <?php include_once('footer.php');?>
  </body>
</html>
