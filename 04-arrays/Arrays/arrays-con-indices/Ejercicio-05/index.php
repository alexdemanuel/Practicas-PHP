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
for ($i=0; $i <= 9; $i++) {
    $valores[$i] = rand(1,30);
    echo "</br>";

}

// Imprimimos los valores almacenados en el array
for ($i=0; $i <10; $i++){
    echo "el Valor de $i es: ".$valores[$i];
    echo "</br>";

}
// Calcular valor medio
$suma = 0;
for ($i=0; $i < 10; $i++){
    $suma =$suma + $valores[$i];

}
    $media = $suma / count($valores);

    echo "El valor medio es: ".$media;
    echo "</br>";


// Averiguar cual es el valor maximo

$maximo = -1;
for ($i=0; $i <10; $i++){
    if( $valores[$i] > $maximo){
        $maximo = $valores[$i];
        $posicion = $i;
    }
}

echo "El número máximo es: ".$maximo. " y esta en la posición: ".$posicion;
echo "</br>";


// Valor Minimo
$minimo = 99;
for ($i=0; $i <10; $i++){
    if( $valores[$i]<=$minimo){
        $minimo = $valores[$i];
        $posicion = $i;
    }
}

echo "El numero mínimo es: ".$minimo. " y esta en la posición: ".$posicion;
echo "</br>";


?>
