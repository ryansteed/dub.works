<?php

include_once('config.php');
$dir = new DirectoryIterator($projectsPath);
$events = array();
foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
      $filename = $fileinfo->getFilename();
      array_push($events, $projectsPath."/".$filename);
    }
}
$events_json = json_encode($events);

?><!DOCTYPE html>
<html lang="en">

  <head>
    <title>Dub Works - Events</title>
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
    <?php
      foreach($events as $key => $eventFilePath):
        $string = file_get_contents($projectsPath."/".$filename);
        $json_data = json_decode($string,true);
    ?>
    <section <?php if ($key % 2 == 1) {echo("class='bg-light'");}?> style="padding-top: 75px">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <a href="<?= $json_data["url"] ?>"><h3><i class="fa fa-link"></i> <?= $json_data["title"] ?></h3></a>
            <h3 class="section-subheading text-muted"><?= $json_data["author"] ?></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <p class="vertical-center">
              <?= $json_data["description"] ?>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg">
            <img class="img-fluid" src="<?= $json_data['image'] ?>" alt="E-nable photo">
          </div>
        </div>
      </div>
    </section>
    <?php endforeach; ?>
        

    <?php include_once('contact_us.php'); ?>
    <?php include_once('footer.php');?>
  </body>
</html>