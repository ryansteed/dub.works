<?php

include_once('config.php');
$string = file_get_contents($postsUri."/team.json");
$json_data = json_decode($string,true);

?>
<!-- Team -->
<section class="bg" id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Who We Are</h2>
      </div>
    </div>
    <div class="row">
    	<div class="col-lg-12 text-center">
    		<h3 class="section-heading subheader text-muted">Students</h3>
    	</div>
    </div>
    <div class="row">
		<?php
		    foreach(array_filter($json_data,"filterStudents") as $key => $item):
		?>
		<div class="col-sm-3">
			<div class="team-member">
			  <div class="image" style="background-image: url('<?= $teamImgUri.$item["pic"] ?>'"></div>
			  <h4><?= $item["first"] ?> <?= $item["last"] ?></h4>
			  <p class="text-muted"><?= $item["bio"] ?></p>
			</div>
		</div>
      	<?php endforeach; ?>
    </div>
    <div class="row">
    	<div class="col-lg-12 text-center">
    		<h3 class="section-heading subheader text-muted">Faculty Sponsors</h3>
    	</div>
    </div>
    <div class="row">
		<?php
		    foreach(array_filter($json_data,"reverseFilterStudents") as $key => $item):
		?>
		<div class="col-sm-3">
			<div class="team-member">
			  <div class="image" style="background-image: url('<?= $teamImgUri.$item["pic"] ?>'"></div>
			  <h4><?= $item["first"] ?> <?= $item["last"] ?></h4>
			  <p class="text-muted"><?= $item["bio"] ?></p>
			  <!-- <ul class="list-inline social-buttons">
			    <li class="list-inline-item">
			      <a href="#">
			        <i class="fa fa-twitter"></i>
			      </a>
			    </li>
			    <li class="list-inline-item">
			      <a href="#">
			        <i class="fa fa-facebook"></i>
			      </a>
			    </li>
			    <li class="list-inline-item">
			      <a href="#">
			        <i class="fa fa-linkedin"></i>
			      </a>
			    </li>
			  </ul> -->
			</div>
		</div>
      	<?php endforeach; ?>
    </div>
  </div>
</section>
