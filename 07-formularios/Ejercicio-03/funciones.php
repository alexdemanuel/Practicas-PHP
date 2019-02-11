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

/*imprimimos todas las tablas del 1-10
function imprimir_tablas($inicio, $fin){
    for($i=$inicio; $i<=$fin; $i++){
        multiplicar($i);
    }
}
*/
// Ejercicio 3 


function inicializar_array($numero_elementos, $min, $max){
    $numeros = array();
    for ($i=0; $i < $numero_elementos; $i++){
        $numeros[$i] = rand($min, $max);
    }

    return $numeros;
}

//Ejercicio 4 

function calcular_media($lista){
    $suma=0;
    $numero_elementos = count($lista);
        for ($i = 1;$i< $numero_elementos; $i++){
            $suma = $suma + $lista[$i];
        }
    $media = $suma / $numero_elementos;
    return $media;
}




//Ejercicio 5

function calcular_max($lista){
    $maximo = -1;
    $numero_elementos = count($lista);
        for ($i = 1; $i < $numero_elementos; $i++){    
            if ($lista[$i] > $maximo){
                $maximo = $lista[$i];
            }
        }   
    
    return $maximo;

}


// Ejercicio 6

function calcular_min($lista){
    $minimo = 99;
    $numero_elementos = count($lista);
        for ($i = 1; $i < $numero_elementos; $i++){    
            if ($lista[$i] < $minimo){
                $minimo = $lista[$i];
            }
        }   
    
    return $minimo;

}


?>