<?php

echo "<h2>1. Escribe un script que muestre la tabla de multiplicar de un número aleatorio.</h2>";

$numero=rand(1, 10);
echo "<table>";

for ($i=0; $i <=10; $i++){
    
    echo "<tr>";
        echo "<td> $numero </td>";
        echo "<td> x </td>";
        echo "<td> $i </td>";
        echo "<td> = </td>";
        echo "<td>".$numero*$i."</td>"; // para unir variables a la cadena de texto se usan los .variable.
    echo "</tr>";

}

echo "</table>";


?>