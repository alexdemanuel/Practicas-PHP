<?php


echo "<h2>1. Escribe un script que simule el comportamiento de lanzar una moneda al aire
y muestre una imagen con la cara o la cruz de la moneda.<h2>";

//nos lo muestra en pantalla 

echo "Ejercicio-01";
echo "</br>";

//nos lo muestra en pantalla 

print("asi puedo escribir cosas");
echo "</br>";


// nos genera un numero entre los valores del rand y nos lo muestra 
print("Valor de rand: ");
print(rand(0,1));
echo "</br>";

//metemos el numero en una variable para luego mostrarlo
$numero = rand(0,1);
echo $numero;
echo "</br>";
//si numero es 0 entonces es cara sino, sera cruz 
if ($numero == 0) {
     echo "<img src='images/cara.jpg'>";
} else {
     echo "<img src='images/cruz.jpg'>";
}
?>