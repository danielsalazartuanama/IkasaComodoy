<?php

namespace App\Daos;

use Libs\Connection;
use Libs\Dao;
use stdClass;

class ProductoDAO extends Dao
{
    public function __construct()
    {
        $this->loadConnection();
    }
    public function getAll(bool $estado)
    {
        $sql = "SELECT idproduct,idmarca,idcateg,idunidad,nombre,precio,precioventa,stock,stockminimo,estado FROM productos where estado=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $estado, \PDO::PARAM_BOOL);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
        return $result;
    }
    public function get(int $id)
    {
        if ($id > 0) {
            $sql = "SELECT idproduct,idmarca,idcateg,idunidad,nombre,precio,precioventa,stock,stockminimo,estado FROM productos WHERE idproduct=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1, $id, \PDO::PARAM_INT);
            //$stmt->bindParam(2, $id, \PDO::PARAM_STR);
            $stmt->execute();
            //si es fetch retorna objeto nulo
            $result = $stmt->fetch(\PDO::FETCH_OBJ);
        } else {
            $result = new stdClass();
            $result->idproduct = 0;
            //$result->idmarca=0;
            //$result->idcateg = 0;
            //$result->idunidad = 0;
            $result->nombre = '';
            $result->precio = 0;
            $result->precioventa = 0;
            $result->stock = 0;
            $result->stockminimo = 0;
            $result->estado = false;
        }
        return $result;
    }
    public function create($obj)
    {
        $sql = "INSERT INTO productos(idmarca,idcateg,idunidad,nombre,precio,precioventa,stock,stockminimo,estado)values(?,?,?,?,?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $obj->idmarca, \PDO::PARAM_INT);
        $stmt->bindParam(2, $obj->idcateg, \PDO::PARAM_INT);
        $stmt->bindParam(3, $obj->idunidad, \PDO::PARAM_INT);
        $stmt->bindParam(4, $obj->nombre, \PDO::PARAM_STR);
        $stmt->bindParam(5, $obj->precio, \PDO::PARAM_INT);
        $stmt->bindParam(6, $obj->precioventa, \PDO::PARAM_INT);
        $stmt->bindParam(7, $obj->stock, \PDO::PARAM_INT);
        $stmt->bindParam(8, $obj->stockminimo, \PDO::PARAM_INT);
        $stmt->bindParam(9, $obj->estado, \PDO::PARAM_BOOL);

        return $stmt->execute();
        // $data = $stmt->fetch(\PDO::FETCH_OBJ);
        //return $data;
    }
    public function update($obj)
    {
        $sql = "UPDATE  productos SET idmarca=:idmarca,idcateg=:idcateg,idunidad=:idunidad,nombre=:nombre,
        precio=:precio,precioventa=:precioventa,stock=:stock,stockminimo=:stockminimo,estado=:estado where idproduct=:idproduct";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':idmarca', $obj->idmarca, \PDO::PARAM_INT);
        $stmt->bindParam(':idcateg', $obj->idcateg, \PDO::PARAM_INT);
        $stmt->bindParam('idunidad', $obj->idunidad, \PDO::PARAM_INT);
        $stmt->bindParam(':nombre', $obj->nombre, \PDO::PARAM_STR);
        $stmt->bindParam(':precio', $obj->precio, \PDO::PARAM_INT);
        $stmt->bindParam(':precioventa', $obj->precioventa, \PDO::PARAM_INT);
        $stmt->bindParam(':stock', $obj->stock, \PDO::PARAM_INT);
        $stmt->bindParam(':stockminimo', $obj->stockminimo, \PDO::PARAM_INT);
        $stmt->bindParam(':estado', $obj->estado, \PDO::PARAM_BOOL);
        $stmt->bindParam(':idproduct', $obj->idproduct, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM  productos where idproduct=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE productos SET estado=0 where idproduct?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
