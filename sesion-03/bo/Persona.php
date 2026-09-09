<?php

namespace negocio;

use \dao\Persona as PersonaDAO;
use \dto\Persona as PersonaDTO;

class Persona
{
    private $arrPersonas = [];

    public function obtenerPersonas()
    {
        $objPersonaDao = new PersonaDAO();

        if ($objPersonaDao->getConexion()) {

            $data = $objPersonaDao->getPersonas();

            foreach ($data as $elem) {
                /*$objP = new PersonaDTO();
                $objP->setNombre($elem["nombre"]);
                $objP->setApellido($elem["apellido"]);
                $objP->setEdad($elem["edad"]);*/
                //Las líneas de código 21-24 es lo mismo a las líneas 26-32:
                array_push(
                    $this->arrPersonas,
                    new PersonaDAO(
                        $elem["nombre"],
                        $elem["apellido"],
                        $elem["edad"]
                    )
                );
            }
        }

        return $this->arrPersonas;
    }
}
