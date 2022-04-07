<?php 
// $decoded
$main = $decoded->list[0]->weather[0]->main;
$temp = $decoded->list[0]->main->temp;
$temp_min = $decoded->list[0]->main->temp_min;
$temp_max = $decoded->list[0]->main->temp_max;
$temp_feelsLike = $decoded->list[0]->main->feels_like;
?>

<div class="card-group w-80">
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Condition : <?php echo $main ?> </h5>
      <p class="card-text">Current Tempereture : <?php echo $temp ?></p>
      <p class="card-text">Minimum Tempereture : <?php echo $temp_min ?></p>
      <p class="card-text">Maximum Tempereture : <?php echo $temp_max ?></p>
      <p class="card-text">Feels like : <?php echo $temp_feelsLike ?></p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>

</div>