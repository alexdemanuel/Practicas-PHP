<?php

echo "<h2>3. Escribe un script PHP que realice las siguientes acciones: - Inicializar un array de 10 elementos, con valores aleatorios entre 1 y 30. - Una vez que ha inicializado el array, imprima todos los valores que almacena. - Buscar el valor máximo de los valores del array. - Muestre el valor máximo que ha encontrado.</h2>";
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
// Averiguar cual es el valor mínimo
    /* le damos un valor mas bajo de los que esten en el array para que al 
    comparalo con el primer valor del array siempre se cumpla y posteriormente siga comparando
    los valores de array buscando el valor maximo
    */
$maximo = 0; // este valor puede ser negativo
for ($i=0; $i <10; $i++){
    if( $valores[$i] > $maximo){
        $maximo = $valores[$i];
        $posicion = $i; // para que nos indique en que posicion esta ese valor
    }
}

echo "El número máximo es: ".$maximo. "y esta en la posición: ".$posicion;
?>