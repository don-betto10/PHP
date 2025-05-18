<?php

class Persona {
    public string $nombre = "";
    public int $edad = 0;
    public float $altura = 0;

    public function __construct($nombre, $edad, $altura)
    {
        echo "Hola esto es un saludo" ;
        echo "<br>";
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->altura = $altura;
    }
  
}

$objetoPersona = new Persona("Alberto" , "33", "1.92");

echo "Mi nombre es: " .$objetoPersona->nombre."<br>";
echo "Mi edad es: " .$objetoPersona->edad."<br>";
echo "Mi altura es: " .$objetoPersona->altura."<br>";



    
    
