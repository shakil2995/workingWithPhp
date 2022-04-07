<?php 
$main = $decoded->list[0]->weather[0]->main;
$temp = $decoded->list[0]->main->temp;
$temp_min = $decoded->list[0]->main->temp_min;
$temp_max = $decoded->list[0]->main->temp_max;
$temp_feelsLike = $decoded->list[0]->main->feels_like;
$icon = $decoded->list[0]->weather[0]->icon;
$epoch=$decoded->list[0]->dt;
$time=new DateTime("@$epoch");
?>
<div class="main-contaner"> 
<form class="search" action="index.php" method="get">
    <div class="center">
        <input type="text" style="width:85%" name="city_name" placeholder="Enter City Name">
        <button class="btn btn-primary btn-md border border-radius center" type="submit">GO</button>
    </div>
</form>
<div class=" card-group w-80 ">
  <div class="card c-card ">
    <img class="card-img-top" style="width=30px"; src="https://openweathermap.org/img/wn/<?php echo $icon ?>@2x.png" alt="Card image cap">
    <div class="card-body">
    <p class="card-text time"><?php echo $time->format('d/m/D H:i:s') ?></p>
      <h5 class="card-title">Condition : <?php echo $main ?> </h5>
      <p class="card-text">Current Tempereture : <?php echo $temp ?>°</p>
      <p class="card-text">Minimum Tempereture : <?php echo $temp_min ?>°</p>
      <p class="card-text">Maximum Tempereture : <?php echo $temp_max ?>°</p>
      <p class="card-text">Feels like : <?php echo $temp_feelsLike ?>°</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card c-card ">
    <img class="card-img-top" style="width=30px"; src="https://openweathermap.org/img/wn/<?php echo $icon ?>@2x.png" alt="Card image cap">
    <div class="card-body">
    <p class="card-text time"><?php echo $time->format('d/m/D H:i:s') ?></p>
      <h5 class="card-title">Condition : <?php echo $main ?> </h5>
      <p class="card-text">Current Tempereture : <?php echo $temp ?>°</p>
      <p class="card-text">Minimum Tempereture : <?php echo $temp_min ?>°</p>
      <p class="card-text">Maximum Tempereture : <?php echo $temp_max ?>°</p>
      <p class="card-text">Feels like : <?php echo $temp_feelsLike ?>°</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card c-card ">
    <img class="card-img-top" style="width=30px"; src="https://openweathermap.org/img/wn/<?php echo $icon ?>@2x.png" alt="Card image cap">
    <div class="card-body">
    <p class="card-text time"><?php echo $time->format('d/m/D H:i:s') ?></p>
      <h5 class="card-title">Condition : <?php echo $main ?> </h5>
      <p class="card-text">Current Tempereture : <?php echo $temp ?>°</p>
      <p class="card-text">Minimum Tempereture : <?php echo $temp_min ?>°</p>
      <p class="card-text">Maximum Tempereture : <?php echo $temp_max ?>°</p>
      <p class="card-text">Feels like : <?php echo $temp_feelsLike ?>°</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card c-card ">
    <img class="card-img-top" style="width=30px"; src="https://openweathermap.org/img/wn/<?php echo $icon ?>@2x.png" alt="Card image cap">
    <div class="card-body">
    <p class="card-text time"><?php echo $time->format('d/m/D H:i:s') ?></p>
      <h5 class="card-title">Condition : <?php echo $main ?> </h5>
      <p class="card-text">Current Tempereture : <?php echo $temp ?>°</p>
      <p class="card-text">Minimum Tempereture : <?php echo $temp_min ?>°</p>
      <p class="card-text">Maximum Tempereture : <?php echo $temp_max ?>°</p>
      <p class="card-text">Feels like : <?php echo $temp_feelsLike ?>°</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card c-card ">
    <img class="card-img-top" style="width=30px"; src="https://openweathermap.org/img/wn/<?php echo $icon ?>@2x.png" alt="Card image cap">
    <div class="card-body">
    <p class="card-text time"><?php echo $time->format('d/m/D H:i:s') ?></p>
      <h5 class="card-title">Condition : <?php echo $main ?> </h5>
      <p class="card-text">Current Tempereture : <?php echo $temp ?>°</p>
      <p class="card-text">Minimum Tempereture : <?php echo $temp_min ?>°</p>
      <p class="card-text">Maximum Tempereture : <?php echo $temp_max ?>°</p>
      <p class="card-text">Feels like : <?php echo $temp_feelsLike ?>°</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  </div>
</div>