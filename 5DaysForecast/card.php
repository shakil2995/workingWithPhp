<div class="main-contaner"> 
<form class="search" action="index.php" method="get">
    <div class="center">
        <input type="text" style="width:85%" name="city_name" placeholder="Enter City Name">
        <button class="btn btn-primary btn-md border border-radius center" type="submit">GO</button>
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
            $cTime = date('h:i A');
            // echo $i;
            ?>
            <div class="card c-card ">
                <img class="card-img-top" style="width=30px"; src="https://openweathermap.org/img/wn/<?php echo $icon ?>@2x.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text time"><?php echo $time->format('d/m/D') ?></p>
                    <h5 class="card-title"><span style="color:aquamarine">Condition : <?php echo $main ?> </span></h5> 
                    <br>
                    <p class="card-text">Current Tempereture :<span style="color:"> <?php echo $temp ?>° </span></p>
                    <p class="card-text">Min Tempereture : <?php echo $temp_min ?>°</p>
                    <p class="card-text">Max Tempereture : <?php echo $temp_max ?>°</p>
                    <p class="card-text">Feels like : <?php echo $temp_feelsLike ?>°</p>
                    <p class="card-text"><small class="text-muted">Last updated at <?php echo $cTime ?> </small></p>
                </div>
            </div>

    <?php endfor; ?>
    </div>
</div>