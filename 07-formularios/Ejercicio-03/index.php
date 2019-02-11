<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h2>3. Escribe un script que muestre un formulario que permita introducir un número y mostrar su tabla de multiplicar.

</h2>

<form action="index.php" method="POST">
    <div>
        <label for="tabla">Tabla de multiplicar:</label>
        <input type="number" id="tabla" name="tabla">
        <button type="submit">Enviar</button>
    </div>


<?php
include("funciones.php");
 $numero = $_POST["tabla"];

if( !empty($numero) ){
    multiplicar($numero);
}

?>

</form>

    
</body>
</html>
