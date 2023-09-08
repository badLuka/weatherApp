<?php

error_reporting(E_ERROR | E_PARSE);



if (isset($_GET['city'])){
    $url =  file_get_contents('https://api.openweathermap.org/data/2.5/weather?q='.$_GET['city'].'&appid=343bbc25141e62f27143e8df02d41cd3&units=metric');

    $weatherArray = json_decode($url, true);

    $weatherTemp = round($weatherArray['main']['temp']);
    $weatherWind = round($weatherArray['wind']['speed']);
    $weatherCloud = $weatherArray['weather'][0]['description'];
}





