<?php
namespace App\Daos;

use Libs\Connection;
use Libs\Dao;
use stdClass;

class MarcaDAO extends Dao
{
   

    public function __construct()
    {
        $this->loadConnection();
    }
    public function getAll(){

       
        $sql= "SELECT idmarca, nombre, descripcion, estado FROM marcas";
        $stmt=$this->pdo->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll(\PDO::FETCH_OBJ);
        return $result;
    }

    public function get(int $id){
       

        if ($id>0) {
         
            $sql= "SELECT idmarca, nombre, descripcion,estado FROM marcas WHERE idmarca=?";
            $stmt=$this->pdo->prepare($sql);
            $stmt->bindParam(1, $id, \PDO::PARAM_INT);
            $stmt->execute();
            $result=$stmt->fetch(\PDO::FETCH_OBJ);
           
        }else{
            $result =new stdClass();
            $result->idcateg=0;
             $result->nombre='';
             $result->descripcion='';
             $result->estado=false;
    
        }
        
        return $result;
    }

    public function create($obj)
    {
        $sql = "INSERT INTO marcas(nombre, descripcion,estado)values(?,?,?)";
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
        $sql = "UPDATE  marcas SET nombre=:nombre,descripcion=:descrip where id=:id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':nombre', $obj->nombre, \PDO::PARAM_STR);
        $stmt->bindParam(':descrip', $obj->descripcion, \PDO::PARAM_STR);
        $stmt->bindParam(':estado', $obj->estado, \PDO::PARAM_BOOL);
        $stmt->bindParam(':id' . $obj->id, \PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM  marcas where id=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE marcas SET estado=0 where id=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }

}
