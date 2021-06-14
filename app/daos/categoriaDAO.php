<?php

namespace App\Daos;

use Libs\Connection;
use Libs\Dao;
use stdClass;

class CategoriaDAO extends Dao
{
    public function __construct()
    {
        $this->loadConnection();
    }
    public function getAll(bool $estado)
    {
        $sql = "SELECT idcateg,nombre,descripcion,estado FROM categorias where estado=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $estado, \PDO::PARAM_BOOL);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
        return $result;
    }
    public function get(int $id)
    {
        if ($id > 0) {
            $sql = "SELECT idcateg,nombre, descripcion,estado FROM categorias WHERE idcateg=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1, $id, \PDO::PARAM_INT);
            //$stmt->bindParam(2, $id, \PDO::PARAM_STR);
            $stmt->execute();
            //si es fetch retorna objeto nulo
            $result = $stmt->fetch(\PDO::FETCH_OBJ);
        } else {
            $result = new stdClass();
            $result->idcateg = 0;
            $result->nombre = '';
            $result->descripcion = '';
            $result->estado = false;
        }
        return $result;
    }
    public function getAllSimple(int $id)
    {

        $sql = "SELECT idcateg,nombre FROM categorias WHERE idcateg=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        //$stmt->bindParam(2, $id, \PDO::PARAM_STR);
        $stmt->execute();
        //si es fetch retorna objeto nulo
        $result = $stmt->fetch(\PDO::FETCH_OBJ);
        return $result;
    }
    public function create($obj)
    {
        $sql = "INSERT INTO categorias(nombre, descripcion,estado)values(?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $obj->nombre, \PDO::PARAM_STR);
        $stmt->bindParam(2, $obj->descripcion, \PDO::PARAM_STR);
        $stmt->bindParam(3, $obj->estado, \PDO::PARAM_BOOL);

        return $stmt->execute();
        // $data = $stmt->fetch(\PDO::FETCH_OBJ);
        //return $data;
    }
    public function update($obj)
    {
        $sql = "UPDATE  categorias SET nombre=:nombre,descripcion=:descrip,estado=:estado where idcateg=:idcateg";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nombre', $obj->nombre, \PDO::PARAM_STR);
        $stmt->bindParam(':descrip', $obj->descripcion, \PDO::PARAM_STR);
        $stmt->bindParam(':estado', $obj->estado, \PDO::PARAM_BOOL);
        $stmt->bindParam(':idcateg', $obj->idcateg, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM  categorias where idcateg=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE categorias SET estado=0 where idcateg?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
