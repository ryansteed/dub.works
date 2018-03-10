<?php

include_once('config.php');
$dir = new DirectoryIterator($eventsPath);
$events = array();
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
      $filename = $fileinfo->getFilename();
      $string = file_get_contents($eventsPath."/".$filename);
      $json_data = json_decode($string,true);
      array_push($events, $json_data);
    }
}
usort($events, "sortFunction");

?><!DOCTYPE html>
<html lang="en">

  <head>
    <title>dub.hosts</title>
    <?php include_once('header.php');?>
    <link href="<?= $baseUrl ?>css/events.css" rel="stylesheet">
  </head>

  <body id="page-top">
    <?php include_once('nav.php');?>

    <!-- Header -->
    <section class="text-center" style="padding: 50px;">
      <div class="gallery-container">
        <div class="row" id="slides">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase" style="color: black">Events</h2>
            <h3 class="section-subheading text-muted" style="margin-bottom: 25px">coming up in Tompkins M06</h3>
          </div>
        </div>
        <div class="feature">
          <figure class="featured-item image-holder r-3-2 transition"></figure>
        </div>
        
        <div class="gallery-wrapper">
          <div class="gallery">
              <?php 
                foreach($events as $key => $json_data):
              ?>
                <div class="item-wrapper">
                  <figure class="gallery-item image-holder r-3-2 <?php if($key==0){ echo('active featured-item');}?> transition" style="background-image: url(<?= $eventImgUri ?><?= $json_data['image'] ?>)"></figure>
                </div>
              <?php endforeach; ?>
          </div>
        </div>
        
        <div class="controls">
          <button class="move-btn left">&larr;</button>
          <button class="move-btn right">&rarr;</button>
        </div> 
      </div>
    </section>

    <section class="bg-light" style="padding-top: 50px">
      <div class="container">
        <div class="row text-center">
          <?php
            foreach($events as $key => $json_data):
          ?>
          <div class="col-lg-4 col-md-7 mb-4">
            <div class="card">
              <a class="js-scroll-trigger" style="background-color: lightgray" href="#slides"><img class="hosts card-img-top" src="<?= $eventImgUri ?><?= $json_data['image'] ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title"><h3><?= $json_data["title"] ?></h3></h4>
                <p class="card-text"><?= $json_data["time"] ?></p>
                <p class="card-text"><?= $json_data["date"] ?></p>
                <p class="card-text"><?= $json_data["location"] ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section id="calendar">
      <div class="container">
        <div class="row">
          <iframe src="https://calendar.google.com/calendar/b/1/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=csp8dpd2enffr9jn1j9rva2htc%40group.calendar.google.com&amp;color=%23875509&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
      </div>
    </section>

    <?php include_once('contact_us.php'); ?>
    <?php include_once('footer.php');?>
    <script src="<?= $baseUrl ?>js/events.js"></script>
  </body>
</html>