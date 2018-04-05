<?php
include_once('config.php');
// must change $json_data before call
?>
<?php
	foreach($events as $key => $json_data):
?>
<div class="col-lg-4 col-md-7 mb-4">
<div class="card">
  <a class="js-scroll-trigger" style="background-color: lightgray" href="#slides"><img class="hosts card-img-top" src="<?= $eventImgUri ?><?= $json_data['image'] ?>" alt=""></a>
  <div class="card-body">
    <?php
      if (array_key_exists("url",$json_data)):
    ?>
    <h4 class="card-title"><a href="<?= $json_data["url"] ?>"><h3><i class="fa fa-link"></i> <?= $json_data["title"] ?></h3></a></h4>
    <?php
      else:
    ?>
    <h4 class="card-title"><h3><?= $json_data["title"] ?></h3></h4>
    <?php endif; ?>
    <p class="card-text"><?= $json_data["time"] ?></p>
    <p class="card-text"><?= $json_data["date"] ?></p>
    <p class="card-text"><?= $json_data["location"] ?></p>
  </div>
</div>
</div>
<?php endforeach; ?>