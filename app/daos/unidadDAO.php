<?php

namespace App\Daos;

use Libs\Connection;
use Libs\Dao;
use stdClass;

class UnidadDAO extends Dao
{
    public function __construct()
    {
        $this->loadConnection();
    }
    public function getAll(bool $estado)
    {
        $sql = "SELECT idunidad,nombre,estado FROM unidades where estado=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $estado, \PDO::PARAM_BOOL);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
        return $result;
    }
    public function get(int $id)
    {
        if ($id > 0) {
            $sql = "SELECT idunidad,nombre,estado FROM unidades WHERE idunidad=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1, $id, \PDO::PARAM_INT);
            //$stmt->bindParam(2, $id, \PDO::PARAM_STR);
            $stmt->execute();
            //si es fetch retorna objeto nulo
            $result = $stmt->fetch(\PDO::FETCH_OBJ);
        } else {
            $result = new stdClass();
            $result->idunidad = 0;
            $result->nombre = '';            
            $result->estado = false;
        }
        return $result;
    }
    public function create($obj)
    {
        $sql = "INSERT INTO unidades(nombre,estado)values(?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $obj->nombre, \PDO::PARAM_STR);       
        $stmt->bindParam(2, $obj->estado, \PDO::PARAM_BOOL);

        return $stmt->execute();
        // $data = $stmt->fetch(\PDO::FETCH_OBJ);
        //return $data;
    }
    public function update($obj)
    {
        $sql = "UPDATE  unidades SET nombre=:nombre,estado=:estado where idunidad=:idunidad";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nombre', $obj->nombre, \PDO::PARAM_STR);
        $stmt->bindParam(':estado', $obj->estado, \PDO::PARAM_BOOL);
        $stmt->bindParam(':idunidad', $obj->idunidad, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM  unidades where idunidad=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE unidades SET estado=0 where idunidad?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
