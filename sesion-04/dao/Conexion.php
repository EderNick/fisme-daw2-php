<?php

namespace dao;

class Conexion
{
    private $host = "localhost";
    private $dbname = "sesion_04_bd";
    private $user = "root";
    private $password = "";

    public function conectar()
    {
        try {
            $dsn = "mysql:host=$this->host;dbname=$this->dbname";
            $conexion = new \PDO($dsn, $this->user, $this->password);
            $conexion->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $conexion;
        } catch (\PDOException $e) {
            throw $e;
        }
    }
}
