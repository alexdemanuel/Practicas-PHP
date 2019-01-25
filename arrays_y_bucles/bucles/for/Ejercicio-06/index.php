<?php

echo "<h2>6.Escribe un script PHP que muestre los números del 1 al 10 en una tabla en orden inverso </h2>";
// Solucion 1 
echo "<table border='1'>";
    echo "<tr>";

        for ($i = 10; $i >= 1; $i--){
                echo "<td> $i </td>";  
        }
    echo "</tr>";
echo "</table>";




?>