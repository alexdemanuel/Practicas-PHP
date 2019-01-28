<?php

echo "<h2>Escribe un script PHP que sobre un array de temperaturas realice las siguientes operaciones:</h2>

<ul>Calcular la media.</ul>
<ul>Calcular el valor máximo.</ul>
<ul>Calcular el valor mínimo.</ul>
<ul>Mostrar todos los valores calculados.</ul>
El array de temperaturas lo vamos a generar con números aleatorios. El array será de 10 elementos y los valores aletorios generados estarán entre 1 y 30.";
//Declaro el array
$valores = array();


//inicializo el array con 10 numero aleatorios

$i=0;
while ( $i <= 9){
    $valores[$i] = rand(1,30);
    echo "</br>";
    $i++;
}
$i=0;
 while ($i<10){
    echo "el Valor de $i es: ".$valores[$i];
    echo "</br>";
    $i++;
 }



 // Calcular valor medio

$suma = 0;
$i=0;
while($i < 10 ){
    $suma = $suma + $valores[$i];
    $i++;
}
    $media = $suma / count($valores);
    echo "El valor medio es: ".$media;
    echo "</br>";



// Valor maximo 

$maximo = -1;
$i = 0;
while ($i <10){
    if($valores[$i] > $maximo){
        $maximo = $valores[$i];
        $posicion = $i;
        
    }
    $i++;
}

echo "El número máximo es: ".$maximo. " y esta en la posición: ".$posicion;
echo "</br>";

// Valor minimo


$minimo = 99;
$i = 0;
while ($i <10){
    if($valores[$i] < $minimo){
        $minimo = $valores[$i];
        $posicion = $i;
        
    }
    $i++;
}

echo "El número mínimo es: ".$minimo. " y esta en la posición: ".$posicion;
echo "</br>";

?>
