<?php

echo "<h2>3. Escribe un script PHP que muestre en una tabla los números pares que existen entre 1 y 100. Utiliza un bucle for.</h2>";
// Solucion 1 
echo "<table border='1'>";
    

        for ($i = 1; $i <= 100; $i++){
            if($i % 2 == 0){
            echo "<tr>";
                echo "<td> $i </td>";
            echo "</tr>";   
            } 
        }
    
echo "</table>";


//Solucion 2

echo "<table border='1'>";
    

        for ($i = 2; $i <= 100; $i=$i+2){
            
            echo "<tr>";
                echo "<td> $i </td>";
            echo "</tr>";   
             
        }
    
echo "</table>";




?>