<?php

//inicializa un array de un numero determinado de elementos randoms que se situan entre un valor minimo y maximo fijado
function inicializar_array($numero_elementos, $min, $max){
    $numeros = array();
        for ($i=0; $i < $numero_elementos; $i++){
            $numeros[$i] = rand($min, $max); // mete un numero aleatorio entre el max y en min en la casilla que inidque $i en el array
     }

    return $numeros;
}

// las variables dentro de las funciones son locales y son independientes con respecto a las que estan fuera
function calcular_media($lista){
    $suma=0;
    $numero_elementos = count($lista);
        for ($i = 1;$i< $numero_elementos; $i++){
            $suma = $suma + $lista[$i];
        }
    $media = $suma / $numero_elementos;
    return $media;
}

$lista = inicializar_array(10, 1, 40); //si tiiene return para mostrarla siempre se mete en una nueva variable
$media = calcular_media($lista);
echo "la media es: ".$media;

?>