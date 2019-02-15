<?php

class Coche{

    //propiedades o variables
    
    private $color;  //aqui se le puede asignar un valor por defecto
    protected $potencia; // solo tiene acceso a el la clase en la que se encuentra y las clases que lo hereden
    public $marca;

    // metodos y funciones
    public function setColor($color){ //si la variable esta en privada asi se le puede dar un valor desde fuera del objeto (recomendado mas seguridad)
        $this->color = $color;
    }


    public function getColor(){
         echo "estoy en metodo getColor";
         echo $this->color; //con el this hace referencia a la variable que hay dentor del objeto
    }


}
// clase que hereda de otra clase
class CocheDeLujo extends Coche{
    public function setPotencia($potencia){ //Accede a potencia que esta protected porque la esta heredando de la clase coche con el extended
        $this->potencia = $potencia;
    }

}


//creamos instancia (objeto) de la clase coche

//asi se pueden crear varios objetos de la clase coche
$CocheAlex = new Coche();
$CocheTono = new Coche();

//Dar valor a la variable del objeto
$CocheAlex->color = "Naranja";
$CocheAlex->getColor();

$CocheTono->setColor("Rojo");
$CocheTono->getColor();
echo "El coche de toño es de color: ".$CocheTono->color; // aqui solo podemos acceder al color si la variable de la clase es publico


?>