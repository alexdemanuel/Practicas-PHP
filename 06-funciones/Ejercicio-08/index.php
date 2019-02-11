<?php

include ('funciones.php');

echo dirname(__FILE__); // nos muestra la ruta del arvhivo en el que nos encontramos
echo "</br>";

$lista = inicializar_array(10 ,1 ,30);
$media = calcular_media($lista);
$max = calcular_max($lista);
$min = calcular_min($lista);

echo "La media es: ".$media;
echo "</br>";
echo "El maximo es:".$max;
echo "</br>";
echo "El minimo es: ".$min;

?>