<?php 
$api_key="398e310b24f291b753fabdb60b31cc14";
$url = "http://api.openweathermap.org/data/2.5/weather?q=dhaka&units=metric&appid=$api_key";
$ch = curl_init();
// echo $url;
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
$res = curl_exec($ch);
if($err = curl_error($ch)){
    echo $err;
} else {
    $decoded = json_decode($res);
    print_r($decoded);
}
?>