<?php

echo "<h2>1. Escribe un script PHP que realice las siguientes acciones: Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30. - Una vez que ha inicializado el array, imprimir todos los valores que almacena.</h2>";
//Declaro el array
$valores = array();


//inicializo el array con 10 numero aleatorios
for ($i=0; $i <= 9; $i++) {
    $valores[$i] = rand(1,30);
    echo "</br>";

}

// Imprimimos los valores almacenados en el array
for ($i=0; $i <10; $i++){
    echo "el Valor de $i es: ".$valores[$i];
    echo "</br>";

}


?>