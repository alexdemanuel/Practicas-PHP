<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h2>4. Escribe un script que mediante un formulario permita seleccionar el número de monedas que se desean lanzar (de 1 a 20) y el tipo de moneda (Dólar Estadounidense, Euro, Yen japonés, Libra esterlina, Franco suizo). El comportamiento tiene que ser similar al de la web random.org.

</h2>

<form action="index.php" method="POST">
    <div>
        <label for="number_of_coins">numero de monedas:</label>
        <input type="number"id="number_of_coins" name="number_of_coins">

        <label for="monedas">Tipo de moneda:</label>
        <select name="type_of_coins">
            <option selected value="1" >Selecciona el tipo de moneda</option>
            <option value="2">Dólar Estadounidense</option>
            <option value="3">Euro</option>
            <option value="4">Yuan Chino</option>
            <option value="5">Franco Suizo</option>
            <option value="6">Peso Colombiano</option>
        </select>

      <!--  <label for="range">Rango:</label>
        <input type="range" min="0" max="1" id="range" name="rango">


        -->
            <button type="submit">Enviar</button> 
            
    </div>

<?php
$number_of_coins = $_POST["number_of_coins"];
$type_of_coins = $_POST["type_of_coins"];
$range = $_POST["range"];

//print_r($_POST);

if(empty($number_of_coins) || $type_of_coins == 1){
    echo "<h2>Has de introducir los datos en todos los campos</h2>";

}else{
/*if( !empty($number_of_coins) && empty($type_of_coins)!= 1 ){
    echo "<h2>$number_of_coins</h2>";

    echo "<h2>$type_of_coins</h2>";
  */

    for($i=1; $i <= $number_of_coins; $i++){
        $numero = rand(0,1);
        //Dolares
        if ($type_of_coins == 2 && $numero == 0){
            echo "<img src='images/dolar-obverse.jpg'</img>";
        }else if($type_of_coins == 2 && $numero == 1 ){
            echo "<img src='images/dolar-reverse.jpg'</img>";
        }

        //Euros
        if ($type_of_coins == 3 && $numero == 0){
            echo "<img src='images/euro-obverse.jpg'</img>";
        }else if($type_of_coins == 3 && $numero == 1 ){
            echo "<img src='images/euro-reverse.jpg'</img>";
        }

        //Chinese YUAN
        if($type_of_coins == 4 && $numero == 0){
            echo "<img src='images/yuan-obverse.jpg'</img>";
        }else if($type_of_coins == 4 && $numero == 1 ){
            echo "<img src='images/yuan-reverse.jpg'</img>";
        }
        //Francos suizos

        if($type_of_coins == 5 && $numero == 0){
            echo "<img src='images/franco-obverse.jpg'</img>";
        }else if($type_of_coins == 5 && $numero == 1 ){
            echo "<img src='images/franco-reverse.jpg'</img>";
        }


        //Pesos Colombianos
        if($type_of_coins == 6 && $numero == 0){
            echo "<img src='images/peso-obverse.jpg'</img>";
        }else if($type_of_coins == 6 && $numero == 1 ){
            echo "<img src='images/peso-reverse.jpg'</img>";
        }

        // Franc

        


    }

}





    // Funciones monedas!!
    //Funcion Dolar
   function dolar(){
        if ($type_of_coins == 2 && $numero == 0){
            echo "<img src='images/dolar-obverse.jpg'</img>";
        }else if($type_of_coins == 2 && $numero == 1 ){
            echo "<img src='images/dolar-reverse.jpg'</img>";

        }
    }



?>

</form>

    
</body>
</html>
