<?php

include_once('config.php');
$features = array();

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
$project_feature = $events[rand(0,count($events)-1)];

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
$upcoming = array_filter($events,"filterUpcoming");
usort($upcoming, "reverseSortFunction");
$event_feature = $events[0];

?><!DOCTYPE html>
<html lang="en">

  <head>
    <title>dub.works</title>
    <?php include_once('header.php');?>
    <link href="<?= $baseUrl ?>css/flip.css" rel="stylesheet">
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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

    <section id="features" class="bg">
      <div class="container">
        <div class="row text-center">
          <div class="col-lg-4 col-md-7 mb-4">
            <div class="card">
              <a class="gray"><img class="hosts card-img-top" src="<?= $project_feature['image'] ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title"><a href="<?= $project_feature["url"] ?>"><h3><i class="fa fa-link"></i> <?= $project_feature["title"] ?></h3></a></h4>
                <p class="card-text"><?= $project_feature["description"] ?></p>
              </div>
              <div class="card-footer">
                <a href="<?= $baseUrl ?>creates" target="_blank" class="btn btn-primary">All Projects</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-7 mb-4">
            <div class="card">
              <a class="js-scroll-trigger gray" href="#slides"><img class="hosts card-img-top" src="<?= $eventImgUri ?><?= $event_feature['image'] ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title"><h3><?= $event_feature["title"] ?></h3></h4>
                <p class="card-text"><?= $event_feature["time"] ?></p>
                <p class="card-text"><?= $event_feature["date"] ?></p>
                <p class="card-text"><?= $event_feature["location"] ?></p>
              </div>
              <div class="card-footer">
                <a href="<?= $baseUrl ?>hosts" target="_blank" class="btn btn-primary">All Events</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-7 mb-4">
            <div class="card">
              <div class="card-body">
                <div id="tweets" class="text-center" style="max-height: 550px; overflow-y: scroll; width: 100%">
                  <a class="twitter-timeline" data-theme="light" data-link-color="#ffb347" href="https://twitter.com/gwinnocenter?ref_src=twsrc%5Etfw" data-tweet-limit="20" data-dnt="true"></a>
                </div>
              </div>
              <div class="card-footer">
                <ul class="list-inline social-buttons">
                  <li class="list-inline-item">
                    <a href="https://twitter.com/gwinnocenter">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://www.facebook.com/gwinnovationcenter/">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a href="https://join.slack.com/t/dubworks/shared_invite/enQtMzE5OTQ2MDU0NTM1LTNiMDMzNjQ3NDA1YTgyZmFkN2Y4NzFlODhjYWI4NTE1NWY3ZmRiZmQ1Nzc4ZjNmNGRlMTZiNDJkMDNhMzYzOWI">
                      <i class="fa fa-slack"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about" class="bg-light">
      <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2 class="section-heading text-uppercase">What We Do</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p class="vertical-center">
                Dub Works is the student-run organization managing the GW Innovation Center in Tompkins Hall on the Foggy 
                Bottom campus, the first dedicated physical place for cross- 
                departmental and multidisciplinary innovation on campus. Dub Works provides a supportive climate for ideation, creativity and 
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

    <?php include_once('team.php'); ?>
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
