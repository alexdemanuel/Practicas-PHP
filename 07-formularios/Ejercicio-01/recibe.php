<?php

if(empty($_GET["user_name"]) == 1){
    echo "No hay valores en el user_name";

}else{
    echo "Bienvenido a IAW: ".$_GET["user_name"];
}

?>