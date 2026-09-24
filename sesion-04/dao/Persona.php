<?php

namespace dao;

use Exception;
use PDOException;

class Persona
{
    private $conn = null; //guarda la conexion a BD

    public function __construct()
    {
        try {
            $objConex = new Conexion();
            $this->conn = $objConex->conectar();
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function get()
    {
        if ($this->conn == null) {
            throw new Exception("Conexión vacía.");
        }
        try {
            $stmt = $this->conn->prepare("SELECT * FROM persona");
            $stmt->setFetchMode(\PDO::FETCH_ASSOC);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            throw $e;
        }
    }
}
