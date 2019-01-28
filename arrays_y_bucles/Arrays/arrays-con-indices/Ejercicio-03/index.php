<?php

echo "<h2>3. Escribe un script PHP que realice las siguientes acciones: - Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30. - Una vez que ha inicializado el array, imprima todos los valores que almacena. - Buscar el valor mínimo de los valores del array. - Muestre el valor mínimo que ha encontrado.</h2>";
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
// Averiguar cual es el valor minimo
   /* le damos un valor mas alto de los que esten en el array para que al 
    comparalo con el primer valor del array siempre se cumpla y posteriormente siga comparando
    los valores de array buscando el valor minimo
    */
$minimo = 99;
for ($i=0; $i <10; $i++){
    if( $valores[$i]<=$minimo){
        $minimo = $valores[$i];
    }
}

echo "El numero mínimo es: ".$minimo;
?>