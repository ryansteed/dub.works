<?php

include_once('config.php');
$dir = new DirectoryIterator($projectsPath);
$events = array();
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
      $filename = $fileinfo->getFilename();
      $string = file_get_contents($projectsPath."/".$filename);
      $json_data = json_decode($string,true);
      array_push($events, $json_data);
    }
}
usort($events, "sortFunction");

?><!DOCTYPE html>
<html lang="en">

  <head>
    <title>dub.creates</title>
    <?php include_once('header.php');?>
  </head>

  <body id="page-top">
    <?php include_once('nav.php');?>
    <section style="padding-bottom:0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Featured Projects</h2>
          </div>
        </div>
        <hr>
    </section>
    <section style="padding-top: 50px">
      <div class="container">
        <div class="row text-center">
          <?php
            foreach($events as $key => $json_data):
          ?>
          <div class="col-lg-4 col-md-7 mb-4">
            <div class="card">
              <a class="gray"><img class="card-img-top" src="<?= $json_data['image'] ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title"><a href="<?= $json_data["url"] ?>"><h3><i class="fa fa-link"></i> <?= $json_data["title"] ?></h3></a></h4>
                <p class="card-text"><?= $json_data["description"] ?></p>
              </div>
              <div class="card-footer">
                <a href="<?= $json_data['url'] ?>" target="_blank" class="btn btn-primary">More</a>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
        <div class="row text-center">
          <div class="col-md-12">
            <h3 class="section-subheading text-muted" style="margin: 100px 0 20px">Are you a GWU student/faculty with an innovative project or idea?</h3>
            <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" target="_blank" href="https://goo.gl/forms/YMe8bEyoNRlVGWzJ2">Get Featured</a>
          </div>
        </div>
      </div>
    </section>
        

    <?php include_once('contact_us.php'); ?>
    <?php include_once('footer.php');?>
  </body>
</html>