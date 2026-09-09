<?php

namespace dto;

use \dto\Persona as PersonaDTO;

class Estudiante extends PersonaDTO
{
    private $codigoUniv;
    private $carrera;
    private $cicloIngreso;
    private $regular;
    private $creditosMatriculados;

    public function __construct(
        $nombre = "",
        $apellido = "",
        $edad = "",
        $codigo = "",
        $carrera = "",
        $ciclo_ingreso = "",
        $regular = true,
        $creditos_matriculados = 0
    ) {
        parent::__construct($nombre, $apellido, $edad);
        $this->codigoUniv = $codigo;
        $this->carrera = $carrera;
        $this->cicloIngreso = $ciclo_ingreso;
        $this->regular = $regular;
        $this->creditosMatriculados = $creditos_matriculados;
    }

    public function set($atrib, $valor)
    {
        $this->$atrib = $valor;
    }

    public function get($atrib)
    {
        return $this->$atrib;
    }

    public function getDatos()
    {
        return parent::mostrarDatos() . "\n" .
            "Codigo Universitario: $this->codigoUniv .\n" .
            "Carrera Profesional: $this->carrera .\n " .
            "Ciclo Ingreso: $this->cicloIngreso .\n " .
            "Regular: " . ($this->regular ? "Sí" : "No") . " .\n " .
            "Credito Matriculados: $this->creditosMatriculados .\n ";
    }
}
