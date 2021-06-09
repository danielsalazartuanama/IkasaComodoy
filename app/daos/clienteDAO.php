<?php

namespace App\Daos;

use Libs\Connection;
use Libs\Dao;
use stdClass;

class cLienteDAO extends Dao
{
    public function __construct()
    {
        $this->loadConnection();
    }
    public function getAll()
    {
        $sql = "SELECT idcliente,nombres,apellidos,direccion,telf,creditolimite,ruc FROM clientes ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
        return $result;
    }
    public function get(int $id)
    {
        if ($id > 0) {
            $sql = "SELECT idcliente,nombres,apellidos,direccion,telf,creditolimite,ruc FROM clientes WHERE idcliente=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1, $id, \PDO::PARAM_INT);
            //$stmt->bindParam(2, $id, \PDO::PARAM_STR);
            $stmt->execute();
            //si es fetch retorna objeto nulo
            $result = $stmt->fetch(\PDO::FETCH_OBJ);
        } else {
            $result = new stdClass();
            $result->idcliente = 0;
            $result->nombres = '';
            $result->apellidos = '';
            $result->direccion = '';
            $result->telf = '';
            $result->creditolimite = 0;
            $result->ruc = '';
        }
        return $result;
    }
    public function create($obj)
    {
        $sql = "INSERT INTO clientes(nombres,apellidos,direccion,telf,creditolimite,ruc)values(?,?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $obj->nombres, \PDO::PARAM_STR);
        $stmt->bindParam(2, $obj->apellidos, \PDO::PARAM_STR);
        $stmt->bindParam(3, $obj->direccion, \PDO::PARAM_STR);
        $stmt->bindParam(4, $obj->telf, \PDO::PARAM_STR);
        $stmt->bindParam(5, $obj->creditolimite, \PDO::PARAM_INT);
        $stmt->bindParam(6, $obj->ruc, \PDO::PARAM_STR);
        return $stmt->execute();
        // $data = $stmt->fetch(\PDO::FETCH_OBJ);
        //return $data;
    }
    public function update($obj)
    {
        $sql = "UPDATE  clientes SET nombres=:nombres,apellidos=:apellidos,direccion=:direccion,telf=:telf,creditolimite=:creditolimite,ruc=:ruc where idcliente=:idcliente";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nombres', $obj->nombres, \PDO::PARAM_STR);
        $stmt->bindParam(':apellidos', $obj->apellidos, \PDO::PARAM_STR);
        $stmt->bindParam(':direccion', $obj->direccion, \PDO::PARAM_STR);
        $stmt->bindParam(':telf', $obj->telf, \PDO::PARAM_STR);
        $stmt->bindParam(':creditolimite', $obj->creditolimite, \PDO::PARAM_INT);
        $stmt->bindParam(':ruc', $obj->ruc, \PDO::PARAM_STR);
        $stmt->bindParam(':idcliente', $obj->idcliente, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM  clientes where idcliente=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE clientes SET estado=0 where idcliente?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
