<?php

//Definicion de funcion
function mi_primera_funcion(){
    echo "Esto es una funcion";

}

//Invocacion/LLamada de una funcion

mi_primera_funcion();
echo "</br>";


function suma($numero1, $numero2){
    return $numero1 + $numero2;

}
//forma 1 de mostrar resultado
$resultado = suma(3,100);
echo "Suma: $resultado";
echo "</br>";

//forma 2 de mostrar el resultado
echo "Suma: ".suma(3,100);
// cada funcion unicamente devuleve 1 solo valor en caso de querer 2 valores hay que hacer 2 funciones

function producto($numero1, $numero2){
    return $numero1 * $numero2;

}
echo "producto: ".producto(3,100);



?>