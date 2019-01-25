<?php

echo "<h2>4. Escribe un script PHP que realice la simulación de lanzar un dado y muestre una imagen con un valor aleatorio enre 1 y 6. Resuelva el ejercicio utilizando la estructura de control if - else.</h2>";

$numero = rand(1,6);

echo $numero;
echo "</br>";

if($numero==1){
    echo "<img src='images/1.svg'</img>";
}else if($numero==2){
    echo "<img src='images/2.svg'</img>";
}else if($numero==3){
    echo "<img src='images/3.svg'</img>";
}else if($numero==4){
    echo "<img src='images/4.svg'</img>";
}else if($numero==5){
    echo "<img src='images/5.svg'</img>";
}else if($numero==6){
    echo "<img src='images/6.svg'</img>";

}
?>