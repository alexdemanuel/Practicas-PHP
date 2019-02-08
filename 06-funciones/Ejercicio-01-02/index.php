<?php


//funcion para sacar la tabla de multiplicar de un numero 
function multiplicar($numero){
    echo "<h2> Tabla de multiplicar de $numero </h2>";
    echo "<table border=1 cellpadding=5>";
    
    
    for($i=0; $i<=10; $i++){
      
        echo "<tr>";
        echo "<td>$numero</td>";
        echo "<td> X </td>";
        echo "<td> $i </td>";
        echo "<td> = </td>";
        echo "<td>".($numero * $i)."</td>";  //tambien funciona la cuenta sin el parentesis 
        echo "</tr>";
    }
    
    echo "</table>";
}

//imprimimos todas las tablas del 1-10
function imprimir_tablas($inicio, $fin){
    for($i=$inicio; $i<=$fin; $i++){
        multiplicar($i);
    }
}
imprimir_tablas(1,10);

?>