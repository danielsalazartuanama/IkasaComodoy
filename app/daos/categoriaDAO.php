<?php

namespace App\Daos;

use Libs\Connection;
use Libs\Dao;
use Libs\Daos;

class CategoriaDAO extends Dao
{
    public function __construct()
    {
        $this->loadConnection();
    }
    public function getAll()
    {        
        $sql = "SELECT id,nombre, descripcion FROM categoria";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
        return $result;
    }
    public function get(int $id)
    {
        $result = null;
       
        if ($id > 0) {
            $sql = "SELECT id,nombre, descripcion FROM categoria WHERE id=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1, $id, \PDO::PARAM_INT);
            //$stmt->bindParam(2, $id, \PDO::PARAM_STR);
            $stmt->execute();
            //si es fetch retorna objeto nulo
            $result = $stmt->fetch(\PDO::FETCH_OBJ);
        }
        return $result;
    }
}
