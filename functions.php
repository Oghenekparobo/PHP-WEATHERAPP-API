<?php

if (isset($_POST['submit'])) {
    // checking if input is empty

    if (empty($_POST['city'])) {
        $error = "SORRY, your input feild is empty";
    } else {
        $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=".$_POST['city']."&appid=24ed82f55697ab5e64bf80857df213dd");
        $weatherArray = json_decode($apiData, true);
        if ($weatherArray['cod'] === 200) {
            // kelvin to celsius
            $temp =  $weatherArray['main']['temp'] - 273;
            $weather = "<b>" . $weatherArray['name'] . ", " . $weatherArray['sys']['country'] . ":" . intval($temp) . "&deg;C</b> <br>";
            $weather .= "<b>Weather Condition: </b>" . " " . $weatherArray['weather'][0]['description'] . "<br>";
            $weather .= "<b>Atmospheric Pressure: </b>" . $weatherArray['main']['pressure'] . "hPa" . "<br>";
            $weather .= "<b>Wind Speed: </b>" . $weatherArray['wind']['speed'] . "meter/sec" . "<br>";
            $weather .= "<b>Cloudness: </b>" . $weatherArray['clouds']['all'] . "%" . "<br>";
            date_default_timezone_set('UTC');
            $sunrise = $weatherArray['sys']['sunrise'] . "<br>";
            $weather .= "<b>Sunrise:</b>" . date("g:i a", strtotime($sunrise)) . "<br>";
            $weather .= "<b>Current Time:</b>" . date("F j, Y, g:i a");
        } else {
            $error = "city name is invalid, cannot find it.";
            
        }
    }
}



?>