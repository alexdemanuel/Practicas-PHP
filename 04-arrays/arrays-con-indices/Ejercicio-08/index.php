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
    do{
        $valores[$i] = rand(1,30);
        echo "</br>";
        $i++;
    }
while ( $i <= 9);


$i=0;
    do {
        echo "el Valor de $i es: ".$valores[$i];
        echo "</br>";
        $i++;
    }
 while ($i<10);


 // Calcular valor medio

$suma = 0;
$i=0;
    do {
        $suma = $suma + $valores[$i];
        $i++;
    }
while($i < 10 );

    $media = $suma / count($valores);
    echo "El valor medio es: ".$media;
    echo "</br>";



// Valor maximo 

$maximo = -1;
$i = 0;
    do{
        if($valores[$i] > $maximo){
            $maximo = $valores[$i];
            $posicion = $i;
            
        }
        $i++;
    }
while ($i <10);

echo "El número máximo es: ".$maximo. " y esta en la posición: ".$posicion;
echo "</br>";

// Valor minimo


$minimo = 99;
$i = 0;
    do{
        if($valores[$i] < $minimo){
            $minimo = $valores[$i];
            $posicion = $i;
            
        }
        $i++;
    }
while ($i <10);

echo "El número mínimo es: ".$minimo. " y esta en la posición: ".$posicion;
echo "</br>";

?>
