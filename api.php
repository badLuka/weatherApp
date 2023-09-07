<?php

if (isset($_GET['city'])){
    $url =  file_get_contents('https://api.openweathermap.org/data/2.5/weather?q='.$_GET['city'].'&appid=343bbc25141e62f27143e8df02d41cd3');

    $weatherArray = json_decode($url, true);

    print_r($weatherArray);
}





