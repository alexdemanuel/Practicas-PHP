<?php

echo "<h2>Arrays con indices</h2>";

//Declara el array
$productos = array();

// Declara e inicializa el array

$productos = array("disco SSD","Memoria RAM", "Monitor");

echo $productos[0];
echo "</br>";
echo $productos[1];
echo "</br>";
echo $productos[2];
echo "</br>";

//Asignamos nuevos valores al array

$productos[0] = "Este es el producto 0";
$productos[1] = "Este es el producto 1";
$productos[2] = "Este es el producto 2";


echo $productos[0];
echo "</br>";
echo $productos[1];
echo "</br>";
echo $productos[2];
echo "</br>";

//Consultar su contenido con print_r

echo "<pre>";
print_r($productos);
echo "</pre>";

//Cómo conocer el tamaño de un array con *count*

echo "Números de elementos de array: ".count($productos);
echo "</br>";



//Cómo recorrer un array indexado con *for*

$numero_de_elementos = count($productos);

for ($i = 0; $i < $numero_de_elementos; $i++ ) {
    echo $productos[$i];
    echo "</br>";
}

?>
