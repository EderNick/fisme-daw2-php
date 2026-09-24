<?php

namespace dto;

class Persona
{
    //Atributos
    private $id;
    private $nombre;
    private $apellido;
    private $edad;


    //constructor:
    public function __construct($id = "", $nombre = "", $apellido = "", $edad = "")
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    //Setter
    public function setId($value)
    {
        $this->id = $value;
    }
    public function setNombre($value)
    {
        $this->nombre = $value;
    }
    public function setApellido($value)
    {
        $this->apellido = $value;
    }
    public function setEdad($value)
    {
        $this->edad = $value;
    }

    //Getter
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getEdad()
    {
        return $this->edad;
    }

    //Methods
    public function mostrarDatos()
    {
        return $this->nombre . " " . $this->apellido . ($this->edad ? " tiene " . $this->edad . " años." : "");
    }
}
