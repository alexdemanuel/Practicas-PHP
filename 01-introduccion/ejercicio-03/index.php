<?php

//Variable $_GLOBALS Nos muestra todas las variables del servidor
print("<pre>");
print("<h2>Variable \$GLOBALS</h2>");
print_r($GLOBALS);
print("</pre>");

print("-------------");

//Variable $_SERVER es un array que contiene información, tales como cabeceras, rutas y ubicaciones de script
print("<pre>");
print("<h2>Variable \$_SERVER</h2>");
print_r($_SERVER);
print("</pre>");

print("-------------");

//Variable $_GET Un array asociativo de variables pasado al script actual vía parámetros URL.
print("<pre>");
print("<h2>Variable \$_GET</h2>");
print_r($_GET);
print("</pre>");

print("-------------");

// Variable $_POST nos muestra las solicitudes de formularios de la pagina
print("<pre>");
print("<h2>Variable \$_POST</h2>");
print_r($_POST);
print("</pre>");

print("-------------");

// Variable $_FILES nos muestra los archivos de la pagina
print("<pre>");
print("<h2>Variable \$_FILES</h2>");
print_r($_FILES);
print("</pre>");

print("-------------");

// Variable $_COOKIE nos muestra las cookies de la pagina 
print("<pre>");
print("<h2>Variable \$_COOKIE</h2>");
print_r($_COOKIE);
print("</pre>");

print("-------------");

// Variable $_SESSION nos muestra los datos de la sesion
print("<pre>");
print("<h2>Variable \$_SESSION</h2>");
print_r($_SESSION);
print("</pre>");

print("-------------");

// Variable $_REQUEST nos muestra las solicitudes realizadas al servidor
print("<pre>");
print("<h2>Variable \$_REQUEST</h2>");
print_r($_REQUEST);
print("</pre>");

print("-------------");

// Variable $_ENV nos muestran el entorno del servidor
print("<pre>");
print("<h2>Variable \$_ENV</h2>");
print_r($_ENV);
print("</pre>");

?>