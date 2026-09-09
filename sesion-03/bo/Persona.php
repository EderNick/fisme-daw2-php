<?php

namespace bo;

use \dao\Persona as PersonaDAO;
use \dto\Persona as PersonaDTO;

class Persona
{
    private $arrPersonas = [];

    /**
     * @return PersonaDTO[]
     */
    public function obtenerPersonas(): array
    {
        $objPersonaDao = new PersonaDAO();

        if ($objPersonaDao->getConexion()) {

            $data = $objPersonaDao->getPersonas();

            foreach ($data as $elem) {
                /*$objP = new PersonaDTO();
                $objP->setNombre($elem["nombre"]);
                $objP->setApellido($elem["apellido"]);
                $objP->setEdad($elem["edad"]);*/
                //Las líneas de código 21-24 es lo mismo a las líneas 28-31:
                array_push(
                    $this->arrPersonas,
                    new PersonaDTO(
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
