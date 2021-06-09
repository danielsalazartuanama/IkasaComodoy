<?php

namespace App\Daos;

use Libs\Connection;
use Libs\Dao;
use stdClass;

class UsuarioDAO extends Dao
{
    public function __construct()
    {
        $this->loadConnection();
    }
    public function getAll(bool $estado)
    {
        $sql = "SELECT idusuario,idtipo,apellidos,nombres,direccion,telf,usuario,
        clave,correo,fcreacion,feliminacion FROM usuarios  where estado=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $estado, \PDO::PARAM_BOOL);
        $stmt->execute();
        $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
        return $result;
    }
    public function get(int $id)
    {
        if ($id > 0) {
            $sql = "SELECT idusuario,idtipo,apellidos,nombres,direccion,telf,usuario,
            clave,correo,fcreacion,feliminacion,estado FROM usuarios WHERE idusuario=?";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(1, $id, \PDO::PARAM_INT);
            //$stmt->bindParam(2, $id, \PDO::PARAM_STR);
            $stmt->execute();
            //si es fetch retorna objeto nulo
            $result = $stmt->fetch(\PDO::FETCH_OBJ);
        } else {
            $result = new stdClass();
            $result->idusuario = 0;
            //$result->idtipo = 0;
            $result->apellidos = '';
            $result->nombres = '';
            $result->direccion = '';
            $result->telf = '';
            $result->usuario = '';
            $result->clave = '';
            $result->correo = '';
            $result->fcreacion = '';
            $result->feliminacion = '';
            $result->estado = false;
        }
        return $result;
    }
    public function create($obj)
    {
        $sql = "INSERT INTO usuarios(idtipo,apellidos,nombres,direccion,telf,usuario,
        clave,correo,fcreacion,feliminacion,estado)values(?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $obj->idtipo, \PDO::PARAM_INT);
        $stmt->bindParam(2, $obj->apellidos, \PDO::PARAM_STR);
        $stmt->bindParam(3, $obj->nombres, \PDO::PARAM_STR);
        $stmt->bindParam(4, $obj->direcciones, \PDO::PARAM_STR);
        $stmt->bindParam(5, $obj->telf, \PDO::PARAM_STR);
        $stmt->bindParam(6, $obj->usuario, \PDO::PARAM_STR);
        $stmt->bindParam(7, $obj->clave, \PDO::PARAM_STR);
        $stmt->bindParam(8, $obj->correo, \PDO::PARAM_STR);
        $stmt->bindParam(9, $obj->fcreacion, \PDO::PARAM_STMT);
        $stmt->bindParam(10, $obj->feliminacion, \PDO::PARAM_STR);
        $stmt->bindParam(11, $obj->estado, \PDO::PARAM_BOOL);

        return $stmt->execute();
        // $data = $stmt->fetch(\PDO::FETCH_OBJ);
        //return $data;
    }
    public function update($obj)
    {
        $sql = "UPDATE  usuarios SET idtipo=:idtipo,apellidos=:apellidos,nombres=:nombres,direccion=:direccion,telf=:telf,usuario=:usuario,
        clave=:clave,correo=:correo,fcreacion=:fcreacion,feliminacion=:feliminacion,estado=:estado where idusuario=:idusuario";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':idtipo', $obj->idtipo, \PDO::PARAM_INT);
        $stmt->bindParam(':apellidos', $obj->apellidos, \PDO::PARAM_STR);
        $stmt->bindParam(':nombres', $obj->nombres, \PDO::PARAM_STR);
        $stmt->bindParam(':direccion', $obj->direccion, \PDO::PARAM_STR);
        $stmt->bindParam(':telf', $obj->telf, \PDO::PARAM_STR);
        $stmt->bindParam(':usuario', $obj->usuario, \PDO::PARAM_STR);
        $stmt->bindParam(':clave', $obj->clave, \PDO::PARAM_STR);
        $stmt->bindParam(':correo', $obj->correo, \PDO::PARAM_STR);
        $stmt->bindParam(':fcreacion', $obj->fcreacion, \PDO::PARAM_STMT);
        $stmt->bindParam(':feliminacion', $obj->feliminacion, \PDO::PARAM_STR);
        $stmt->bindParam(':estado', $obj->estado, \PDO::PARAM_BOOL);
        $stmt->bindParam(':idusuario', $obj->idusuario, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function delete(int $id)
    {
        $sql = "DELETE FROM  usuarios where idusuario=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE usuario SET estado=0 where idusuario?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
