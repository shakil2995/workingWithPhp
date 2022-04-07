<?php 
$api_key="398e310b24f291b753fabdb60b31cc14";
// echo $api_key;
$ch = curl_init();
$url = "https://api.openweathermap.org/data/2.5/weather?lat=35&lon=139&appid=$api_key";
echo $url;

?>