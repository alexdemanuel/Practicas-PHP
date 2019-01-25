<?php

echo "<h2>7. Escribe un script PHP que realice la simulación de lanzar dos dados y muestre una imagen con los valores obtenidos en cada uno de los dados.</h2>";

$numero = rand(1,6);
$numero2 = rand(1,6);

echo "valor del dado: ".$numero;
echo "-----------";
echo "valor del dado 2: ".$numero2;
echo "</br>";

        echo "<img src='images/$numero.svg'</img>";
        echo "<img src='images/$numero2.svg'</img>";

?>
