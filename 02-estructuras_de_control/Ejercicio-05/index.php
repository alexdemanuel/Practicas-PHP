<?php

echo "<h2>5. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio entre 1 y 6. Resuelva el ejercicio utilizando la estructura de control switch.</h2>";

$numero = rand(1,6);

echo "valor del dado: ".$numero;
echo "</br>";

switch($numero){
    case 1:
        echo "<img src='images/1.svg'</img>";
        break;

    case 2:
        echo "<img src='images/2.svg'</img>";
        break;

    case 3:
        echo "<img src='images/3.svg'</img>";
        break;

    case 4:
        echo "<img src='images/4.svg'</img>";
        break;

    case 5:
        echo "<img src='images/5.svg'</img>";    
        break;

    case 6:
        echo "<img src='images/6.svg'</img>";    
        break;
}

?>