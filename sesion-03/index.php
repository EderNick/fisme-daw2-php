<?php

class Persona
{
    //Atributos
    private $nombre;
    private $apellido;
    private $edad;

    //Métodos:

    //constructor:
    public function __construct($nombre = "", $apellido = "", $edad = "")
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function setNombre($value)
    {
        $this->nombre = $value;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function mostrarDatos()
    {
        echo $this->nombre . " " . $this->apellido . ($this->edad ? " tiene " . $this->edad . " años." : "");
    }
}


$persona1 = new Persona();
echo "<h3> Datos de Persona 1 :</h3>";
$persona1->mostrarDatos();


$persona2 = new Persona("Eder", "Figueroa", 30);
echo "<h3> Datos de Persona 2 :</h3>";
$persona2->mostrarDatos();


$persona3 = new Persona("Eder", "Figueroa");
echo "<h3> Datos de Persona 3 :</h3>";
$persona3->mostrarDatos();
echo "<br>";
$persona3->setNombre("Raul");
$persona3->mostrarDatos();
