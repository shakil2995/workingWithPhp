<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Weather Forecast</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><span style="color:aquamarine">5Days </span>Forecast</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<?php
if(isset($_GET['city_name'])) {
    if($_GET['city_name'] ==""){
        header("Location: index.php");
    }
    elseif($_GET['city_name'] !=""){
        $city_name=$_GET['city_name'];
        }
       } else {
        $city_name="dhaka";
       }
       $api_key="52b87678928e343343b735f32cad5b33";
       $url = "http://api.openweathermap.org/data/2.5/forecast?q=$city_name&units=metric&appid=$api_key";
       $ch = curl_init();
       curl_setopt($ch,CURLOPT_URL,$url);
       curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
       $res = curl_exec($ch);
       if($err = curl_error($ch)){
           echo $err;
       } else {
           $decoded = json_decode($res);
       }
       curl_close($ch);
?>

<div class="main-contaner"> 
<form class="search" action="index.php" method="get">
    <div class="center">
        <input class="input_box" type="text" name="city_name" placeholder="Enter City Name">
        <input class="btn btn-primary btn-md border border-radius center search_btn" type="submit" name="submit_button"value="Go"/>
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
            ?>
<?php if($cod == '200'):?>
            <div class="card c-card ">
                <img class="card-img-top" style="width=30px"; src="https://openweathermap.org/img/wn/<?php echo $icon ?>@2x.png" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text time"><?php echo $time->format('d/m/D')." , ". $city_name ?></p>
                    <h5 class="card-title"><span style="color:aquamarine">Condition : <?php echo $main ?> </span></h5> 
                    <br>
                    <p class="card-text">Current Tempereture :<span style="color:"> <?php echo $temp ?>°C </span></p>
                    <p class="card-text">Min Tempereture : <?php echo $temp_min ?>°C</p>
                    <p class="card-text">Max Tempereture : <?php echo $temp_max ?>°C</p>
                    <p class="card-text">Feels like : <?php echo $temp_feelsLike ?>°C</p>
                    <p class="card-text">Wind Speed : <?php echo $wind_speed ?>km/h</p>
                    <p class="card-text"><small class="text-muted">Last updated at <?php echo $cTime ?> </small></p>
                </div>
            </div>
<?php endif ;?>
    <?php endfor; ?>
    </div>
</div>
<br>
<br>
<footer>
    &copy; Shayla - 2022
</footer>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="script.js"> </script>
</html>