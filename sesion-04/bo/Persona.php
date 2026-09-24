<?php

namespace bo;

use \dao\Persona as PersonaDAO;
use \dto\Persona as PersonaDTO;

class Persona
{
    private $arrPersonas = [];
    private $dao = null;

    public function __construct()
    {
        $this->dao = new PersonaDAO;
    }


    public function obtenerPersonas(): array
    {
        try {
            $datos = $this->dao->get();
            foreach ($datos as $elem) {
                array_push(
                    $this->arrPersonas,
                    new PersonaDTO(
                        $elem["id"],
                        $elem["nombre"],
                        $elem["apellido"],
                        $elem["edad"]
                    )
                );
            }
            return $this->arrPersonas;
        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        return [];
        /*
        if ($objPersonaDao->getConexion()) {

            $data = $objPersonaDao->getPersonas();

            foreach ($data as $elem) {
                // $objP = new PersonaDTO();
                // $objP->setNombre($elem["nombre"]);
                // $objP->setApellido($elem["apellido"]);
                // $objP->setEdad($elem["edad"]);
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
     */
    }
}
