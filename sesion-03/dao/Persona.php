<?php

namespace dao;

class Persona
{
    private $conexion = true;

    public function getConexion()
    {
        return $this->conexion;
    }

    public function getPersonas()
    {
        return  [
            [
                "nombre" => "Juan",
                "apellido" => "Perez",
                "edad" => 35
            ],
            [
                "nombre" => "Pedro",
                "apellido" => "Rojas",
                "edad" => 42
            ],
            [
                "nombre" => "Fatima",
                "apellido" => "Velez",
                "edad" => 30
            ]
        ];
    }
}
