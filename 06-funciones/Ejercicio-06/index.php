<?php

//inicializa un array de un numero determinado de elementos randoms que se situan entre un valor minimo y maximo fijado
function inicializar_array($numero_elementos, $min, $max){
    $numeros = array();
        for ($i=0; $i < $numero_elementos; $i++){
            $numeros[$i] = rand($min, $max); // mete un numero aleatorio entre el max y en min en la casilla que inidque $i en el array
     }

    return $numeros;
}

function calcular_min($lista){
    $minimo = 99;
    $numero_elementos = count($lista);
        for ($i = 1; $i < $numero_elementos; $i++){    
            if ($lista[$i] < $minimo){
                $minimo = $lista[$i];
            }
        }   
    
    return $minimo;

}

$lista = inicializar_array(10, 1, 40); //si tiene return para mostrarla siempre se mete en una nueva variable

$min = calcular_min($lista);
echo $min;
?>