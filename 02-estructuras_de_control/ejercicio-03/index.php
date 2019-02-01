<?php

echo "<h2>3.Escribe un script PHP que mediante un formulario permita introducir una valor numérico (entre 1 y 7) y muestre un mensaje indicando a qué día de la semana corresponde. Por ejemplo, 1 sería lunes, 2 martes, etc.</h2>";

$dia=rand(1,7);
switch($dia){
    case 1:
        echo "Es Lunes";
        break;

    case 2:
        echo "Es Martes";
        break;
    
    case 3:
        echo "Es Miercoles";
        break;

    case 4:
        echo "Es Jueves";
        break;

    case 5:
        echo "Es Viernes";
        break;

    case 6:
        echo "Es Sabado";
        break;

    case 7:
        echo "Es Domingo";

}

?>