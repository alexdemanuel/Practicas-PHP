<?php

$numeros = array();


//inicializo el array

for ($i=0; $i <= 9; $i++) {
    $numeros[$i] = rand(1,30);
    echo "</br>";
    echo $numeros[$i];
}

$numero_de_elementos = count($numeros);
echo "<table border='1'>";
echo "<tr>";

$i=0;
for ($i=0;$i< $numero_de_elementos;$i++){
    echo "<td>$i</td>";
   echo "<br>";
}
echo "</tr>";

//ordenar numero de menor a mayor
sort($numeros);
echo "<tr>";
echo "<td> de menor a mayor";
$i=0;
for($i=0;$i< $numero_de_elementos;$i++){
    echo "<td>".$numeros[$i]."</td>";
   echo "<br>";
}
echo "</tr>";


echo "<tr>";
//ordenar numero de menor a mayor
rsort($numeros);
echo "<tr>";
echo "<td> de mayor a menor";
$i=0;
for($i=0;$i< $numero_de_elementos;$i++){
    echo "<td>".$numeros[$i]."</td>";
   echo "<br>";
}
echo "</tr>";
echo "</table>";


?>