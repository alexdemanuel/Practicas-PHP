<?php

$alumnos = array("Antonio"=>"31", "Maria"=>"28", "Juan"=>"29", "Pepe"=>"27");

//Orden ascencente por valor
asort($alumnos);
    foreach($alumnos as $clave => $valor){
        echo "Clave: ".$clave." - Valor: ". $valor;
        echo "</br>";
    }

echo "<pre>";
print_r($alumnos);
echo "</pre>";

//sacar el valor de una clave determinada del array
echo "Posicion 1: ".$alumnos["Juan"];
echo "</br>";
echo "Posicion 1: ".$alumnos['Juan'];
echo "</br>";

//Orden ascencente por Clave
arsort($alumnos);
    foreach($alumnos as $clave => $valor){
        echo "Clave: ".$clave."-  Valor: ". $valor;
        echo "</br>"; 
    }
    echo "</br>";
//Orden descencente por valor
ksort($alumnos);
    foreach($alumnos as $clave => $valor){
        echo "Clave: ".$clave." - Valor: ". $valor;
        echo "</br>";
    }
    echo "</br>";
//Orden descencente por clave
krsort($alumnos);
    foreach($alumnos as $clave => $valor){
        echo "Clave: ".$clave." - Valor: ". $valor;
        echo "</br>";
    }


?>