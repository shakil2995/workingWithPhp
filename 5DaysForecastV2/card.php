<div class="main-contaner"> 
<form class="search" action="index.php" method="get">
    <!-- <div class="center">
        <input class="input_box" type="text" name="city_name" placeholder="Enter City Name">
        <input class="btn btn-primary btn-md border border-radius center search_btn" type="submit" name="submit_button"value="Go"/>
    </div> -->
    <div class="input-group mb-3">
      <input type="text" name="city_name" class="form-control" placeholder="Enter City Name" aria-label="Enter City Name" aria-describedby="Enter City Name">
      <button class="btn btn-primary" type="submit" name="submit_button"value="Go"id="button-addon2">Go</button>
    </div>
</form>    
<div class=" card-group w-80 ">

        <?php for($i=0;$i<=39;$i+=8): 
            $main = $decoded->list[$i]->weather[0]->main;
            $temp = $decoded->list[$i]->main->temp;
            $temp_min = $decoded->list[$i]->main->temp_min;
            $temp_max = $decoded->list[$i]->main->temp_max;
            $temp_feelsLike = $decoded->list[$i]->main->feels_like;
            $icon = $decoded->list[$i]->weather[0]->icon;
            $epoch=$decoded->list[$i]->dt;
            $time=new DateTime("@$epoch");
            $wind_speed = $decoded->list[$i]->wind->speed;
            date_default_timezone_set('Asia/Dhaka');
            $cTime = date('h:i A');
            $city_name=$decoded->city->name;
            $cod=$decoded->cod;
            // echo $cod;
            // echo $i;
            ?>
<?php if($cod == '200'):?>
            <div class="card c-card ">
                <img class="card-img-top" style="width=30px"; src="https://openweathermap.org/img/wn/<?php echo $icon ?>@2x.png" alt="Card image cap">
                <div class="card-body">
                    <hr>
                    <p class="card-text time"><?php echo $time->format('d/m/D')." , ". $city_name ?></p>
                    <h5 class="card-title"><span style="color:#00ffaa">Condition : <?php echo $main ?> </span></h5> 
                    <br>
                    <div class="card-border">
                    <p class="card-text">Current Tempereture :<span style="color:"> <?php echo $temp ?>°C </span></p>
                    <p class="card-text">Min Tempereture : <?php echo $temp_min ?>°C</p>
                    <p class="card-text">Max Tempereture : <?php echo $temp_max ?>°C</p>
                    <p class="card-text">Feels like : <?php echo $temp_feelsLike ?>°C</p>
                    <p class="card-text">Wind Speed : <?php echo $wind_speed ?>km/h</p>
                    <p class="card-text"><small class="text-muted">Last updated at <?php echo $cTime ?> </small></p> </div>

                </div>
            </div>
<?php endif ;?>
    <?php endfor; ?>
    </div>
</div>