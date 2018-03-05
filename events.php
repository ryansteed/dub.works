<?php

include_once('config.php');
$dir = new DirectoryIterator($eventsPath);
$events = array();
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
      $filename = $fileinfo->getFilename();
      array_push($events, $eventsPath."/".$filename);
    }
}
$events_json = json_encode($events);

?><!DOCTYPE html>
<html lang="en">

  <head>
    <title>Dub Works - Events</title>
    <?php include_once('header.php');?>
    <link href="<?= $baseUrl ?>css/events.css" rel="stylesheet">
  </head>

  <body id="page-top">
    <?php include_once('nav.php');?>

    <!-- Header -->
    <header class="masthead">
      <div class="gallery-container">
        <div class="feature">
          <figure class="featured-item image-holder r-3-2 transition"></figure>
        </div>
        
        <div class="gallery-wrapper">
          <div class="gallery">
              <?php 
                foreach($events as $eventFilePath):
                  $string = file_get_contents($blogPath."/".$filename);
                  $json_data = json_decode($string,true);
              ?>
                <div class="item-wrapper">
                  <figure class="gallery-item image-holder r-3-2 active transition" style="background-image: <?= $eventImgUri ?><?= $json_data["image"] ?>"></figure>
                </div>
              <?php endforeach; ?>
          </div>
        </div>
        
        <div class="controls">
          <button class="move-btn left">&larr;</button>
          <button class="move-btn right">&rarr;</button>
        </div> 
      </div>
    </header>

    <section id="calendar">
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

    <?php include_once('contact_us.php'); ?>
    <?php include_once('footer.php');?>
    <script src="<?= $baseUrl ?>js/events.js"></script>
  </body>
</html>