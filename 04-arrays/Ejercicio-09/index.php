<?php

$alumnos = array("Antonio"=>"31", "Maria"=>"28", "Juan"=>"29", "Pepe"=>"27");

//Orden ascencente por valor 
echo "<h2> Orden ascendente por valor (asort)</h2>";
asort($alumnos);
echo "<table border='1'>";
    foreach($alumnos as $clave => $valor){
        echo "<tr>";
        echo "<td>$clave</td>";
        echo "<td bgcolor=#FF5733>$valor</td>";
        echo "</tr>";

    }
    echo "</table>";
//Orden ascencente por Clave
echo "<h2> Orden descendente por valor (arsort)</h2>";
arsort($alumnos);
echo "<table border='1'>";
    foreach($alumnos as $clave => $valor){
        echo "<tr>";
        echo "<td>$clave</td>";
        echo "<td bgcolor=#FF5733>$valor</td>";
        echo "</tr>";

    }
    echo "</table>";
    echo "</br>";

    //Orden descencente por clave
echo "<h2> Orden ascendente por clave (ksort)</h2>";
ksort($alumnos);
echo "<table border='1'>";
    foreach($alumnos as $clave => $valor){
        echo "<tr>";
        echo "<td bgcolor=#99FF33>$clave</td>";
        echo "<td>$valor</td>";
        echo "</tr>";

    }
    echo "</table>";
    echo "</br>";

//Orden descencente por clave
echo "<h2> Orden descendente por clave (krsort)</h2>";
krsort($alumnos);
echo "<table border='1'>";
    foreach($alumnos as $clave => $valor){
        echo "<tr>";
        echo "<td bgcolor=#99FF33>$clave</td>";
        echo "<td>$valor</td>";
        echo "</tr>";

    }
    echo "</table>";

/*sacar el valor de una clave determinada del array
echo "Posicion 1: ".$alumnos["Juan"];
echo "</br>";
echo "Posicion 1: ".$alumnos['Juan'];
echo "</br>";
*/


?>