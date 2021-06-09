<?php

namespace App\Daos;

use Libs\Connection;
use Libs\Dao;
use stdClass;

class FormapagoDAO extends Dao
{
    public function __construct()
    {
        $this->loadConnection();
    }
    public function getAll()
    {
        $sql = "SELECT idformapago,nombre FROM formapago ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
        return $result;
    }
    public function get(int $id)
    {
        if ($id > 0) {
            $sql = "SELECT idformapago,nombre FROM formapago WHERE idformapago=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1, $id, \PDO::PARAM_INT);
            //$stmt->bindParam(2, $id, \PDO::PARAM_STR);
            $stmt->execute();
            //si es fetch retorna objeto nulo
            $result = $stmt->fetch(\PDO::FETCH_OBJ);
        } else {
            $result = new stdClass();
            $result->idformapago = 0;
            $result->nombre = '';
        }
        return $result;
    }
    public function create($obj)
    {
        $sql = "INSERT INTO formapago(nombre)values(?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $obj->nombre, \PDO::PARAM_STR);

        return $stmt->execute();
        // $data = $stmt->fetch(\PDO::FETCH_OBJ);
        //return $data;
    }
    public function update($obj)
    {
        $sql = "UPDATE  formapago SET nombre=:nombre where idformapago=:idformapago";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nombre', $obj->nombre, \PDO::PARAM_STR);
        $stmt->bindParam(':idformapago', $obj->idformapago, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM  formapago where idformapago=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE formapago SET estado=0 where idformapago?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
