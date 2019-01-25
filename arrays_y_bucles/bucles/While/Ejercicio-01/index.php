<?php

echo "<h2>1. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una fila y 10 columnas. Utiliza un bucle  while</h2>";


echo "<table border='1'>";
    echo "<tr>";

        $i=1;
        while($i<=10){
            echo "<td> $i </td>";
            $i++;
        }

        echo "</tr>"; 
echo "</table>";




?>