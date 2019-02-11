<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>

<h2>1. Escribe un script que muestre un formulario con un campo de texto y que permita enviarlo usando el método GET. El mismo script será capaz de recibir el dato enviado por el formulario y lo mostrará.</h2>

<?php
//if( !empty($_GET["user_name"])) si no esta vacio realiza la acction esta es otra forma de ponerlo
if(empty($_GET["user_name"]) != 1){

    echo "<h2> Bienvenido a IAW: ".$_GET["user_name"]."</h2>";

}

?>

<form action="index.php" method="GET">
    <div>
        <label for="name">NAME:</label>
        <input type="text" id="name" name="user_name">
        <button type="submit">Enviar</button>
    </div>


</form>

    
</body>
</html>
