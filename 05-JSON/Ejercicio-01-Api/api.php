<?php

if(empty($_GET["ciudad"]) == 1){

    //echo "<h1> Error </h2>";
    //echo "<h2> Tiene que indicar el nombre de una ciudad</h2>";
    header('location: index.php');
    exit;

}else{
   

    $ciudad = $_GET["ciudad"];
    $appid = "2e1771d6989168058859fdd4b1b30d89";
    
    $url = "https://api.openweathermap.org/data/2.5/weather?q=".$ciudad."&appid=".$appid."&units=metric";
    
    $json = @file_get_contents($url); // el @ hace que no se muestre el warning
    $weather = json_decode($json);
    
    //solo se pone el if y el exit para no tener que poner el else y tenes mas depurado el codigo
    if($weather->cod !=200){
        echo "<h1> No se ha encontrado la ciudad deseada</h2>";
        exit;
}
    //para que te aparezca una imagen de como esta el cielo y la descripcion de este

    echo "<img src=\"http://openweathermap.org/img/w/".$weather->weather[0]->icon.".png\">";
    echo "<h2>".$weather->weather[0]->description."</h2>";
    
    //asi se accede a un apartado de un objeto
    echo "<table border=1>";

    echo "<tr>";
    echo "<td> Pais: ".$weather->sys->country."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Ciudad: ".$weather->name."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Lat: ".$weather->coord->lat."</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td> Lon: ".$weather->coord->lon."</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td> Temp: ".$weather->main->temp."</td>";
    echo "<tr>";
    
    echo "</tr>";
    echo "<td> humidity: ".$weather->main->humidity."</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td> Temp mínima: ".$weather->main->temp_min."</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td> Temp máxima: ".$weather->main->temp_max."</td>";
    echo "</tr>";
    echo "</table>";

}


?>