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
                <img class="rounded-circle img-fluid" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4>Apply</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">mentor intros, expert advice, workshops, and startup support from the GW Innovation Center</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="subheading">Stage I</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">$100-300 prototype and team development (12 weeks)</p>
                </div>
              </div>
            </li>
            <li class="timeline">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="subheading">Stage II</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">$300-500 validation - customer, innovation, impact, market discovery (12 weeks)</p>
                </div>
              </div>
            </li>
            <li class="timeline-inverted">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="subheading">Stage III</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">$1,000 rapid prototyping &amp; redesign (up to a year)</p>
                </div>
              </div>
            </li>
            <li class="timeline">
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                  <h4 class="subheading">Stage IV</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">variable follow up investment from the fund and/or introduction to investors</p>
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
