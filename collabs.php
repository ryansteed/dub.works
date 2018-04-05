<?php

include_once('config.php');

?><!DOCTYPE html>
<html lang="en">

  <head>
    <title>dub.collabs</title>
    <?php include_once('header.php');?>
    <link href="<?= $baseUrl ?>css/sponsors.css" rel="stylesheet">
  </head>

  <body id="page-top">
    <?php include_once('nav.php');?>

    <section id="sponsors">
      <div class="container">
            <div class="row">
                <div class="col-10 offset2">
                    <h2 id="friends">Our friends </h2>
                    <hr>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>George Hacks</p>
                    <a href="http://georgehacks.org/">
                        <img class="img-responsive img-portfolio img-hover" src="<?= $baseUrl ?>img/portfolio-items/georgehacks.png" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Hackital</p>
                    <a href="http://hackital.io">
                        <img class="img-responsive img-portfolio img-hover" src="<?= $baseUrl ?>img/portfolio-items/hackital.png" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Fourth Wave</p>
                    <a href="http://fourthwavestudios.com">
                        <img class="img-responsive img-portfolio img-hover" src="<?= $baseUrl ?>img/portfolio-items/4ws.png" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Agnes</p>
                    <a href="https://www.agnes.io/">
                        <img class="img-responsive img-portfolio img-hover" src="<?= $baseUrl ?>img/portfolio-items/agnes.png" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Berg Bites</p>
                    <a href="http://bergbites.com">
                        <img class="img-responsive img-portfolio img-hover" src="https://static.wixstatic.com/media/7dc892_28076b162ff84050aab0dea67445e533~mv2.png/v1/crop/x_0,y_106,w_1200,h_565/fill/w_250,h_150,al_c,usm_0.66_1.00_0.01/7dc892_28076b162ff84050aab0dea67445e533~mv2.png" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Give Butter</p>
                    <a href="https://givebutter.com/story">
                        <img class="img-responsive img-portfolio img-hover" src="<?= $baseUrl ?>img/portfolio-items/givebutter.png" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Georgetown Maker Hub</p>
                    <a href="https://www.library.georgetown.edu/makerhub">
                        <img class="img-responsive img-portfolio img-hover" src="<?= $baseUrl ?>img/portfolio-items/makerHub.jpg" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Launch Pad</p>
                    <a href="https://www.facebook.com/LaunchPadGW/">
                        <img class="img-responsive img-portfolio img-hover" src="<?= $baseUrl ?>img/portfolio-items/launchpad.png" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Office of Innovation &amp Entrepreneurship</p>
                    <a href="website link">
                        <img class="img-responsive img-portfolio img-hover" src="<?= $baseUrl ?>img/portfolio-items/entrepreneurship.png" alt="">
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <p>Represently</p>
                    <a href="https://represently.com/">
                        <img class="img-responsive img-portfolio img-hover" src="<?= $baseUrl ?>img/portfolio-items/represently.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('contact_us.php'); ?>
    <?php include_once('footer.php');?>
  </body>
</html>
