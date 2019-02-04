<?php

$ciudad = "Almeria,es";
$appid = "2e1771d6989168058859fdd4b1b30d89";

$url = "https://api.openweathermap.org/data/2.5/weather?q=".$ciudad."&appid=".$appid."&units=metric";

$json = file_get_contents($url);
$weather = json_decode($json);
echo "<pre>";
print_r($weather);
echo "</pre>";

//asi se accede a un apartado de un objeto
echo "<table border=1>"
echo "Lat: ".$weather->coord->lat;
echo "</br>";
echo "Lon: ".$weather->coord->lon;
echo "</br>";
echo "Temp: ".$weather->main->temp;
echo "</br>";
echo "humidity: ".$weather->main->humidity;
echo "</br>";
echo "humidity: ".$weather->main->humidity;
echo "</br>";
echo "Temp_min: ".$weather->main->temp_min;

echo "Temp_max: ".$weather->main->temp_max;


?>