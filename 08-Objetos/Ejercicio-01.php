1.Define una clase llamada "Persona" que tenga las siguientes propiedades:
-Nombre
-Apellido1
-Apelllido2
-Edad


define los metodos get y set para cada una de las propiedades.
Define un metodo llamado "imprimir" que muestre todas las propiedades del objeto.

Realice 2 instancias de esta clase y utilice todos los metodos que ha creado
<?php

class Persona{
   private $nombre;
   private $apellido1;
   private $apellido2;
   private $edad;

   //Nombre
   public function setNombre($nombre){}
        $this->nombre = $nombre;
    }

     public function getNombre(){
        echo "El nombre es:";
        echo $this->nombre;
   }

    //Apellido 1
    public function setApellido1($apellido1){ 
        $this->apellido1 = $apellido1;
    }

    public function getApellido1(){
        echo $this->apellido1;
   }
    //Apellido 2
    public function setApellido2($apellido2){ 
        $this->apellido2 = $apellido2;
    }

    public function getApellido2(){
        echo $this->apellido2;
   }
    //Edad
    public function setEdad($edad){ 
        $this->edad = $edad;
    }

    public function getEdad(){
        echo $this->edad; 
   }

   public function imprimir(){
        echo "Nombre: "$nombre;
        echo "Apellido 1: "$apellido1;
        echo "Apellido 2: "$apellido2;
        echo "Edad: " $edad;

   }

}
// Fuera de la clase
    $Persona1 = new Persona();
    $Persona2 = new Persona();

    $Persona1->nombre("antonio");
    $Persona1->apellido1("Lopez");
    $Persona1->apellido2("Garrido");
    $Persona1->edad("20");


 
    $Persona2->nombre("Alejandro");
    $Persona2->apellido1("De Manuel");
    $Persona2->apellido2("Olmedo");
    $Persona2->edad("20");


    $Persona1->imprimir();
    $Persona2->imprimir();


?>