<?php

echo "<h2>2. Escribe un script PHP que muestre los números del 1 al 10 en una tabla de una columna y 10 filas. Utiliza un bucle  for.</h2>";

echo "<table border='1'>";
    

        for ($i = 1; $i <= 10; $i++){
            echo "<tr>";
                echo "<td> $i </td>";
            echo "</tr>";    
        }
    
echo "</table>";

?>