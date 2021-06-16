<?php

namespace App\Daos;

use App\Models\RolModel;
use Libs\Connection;
use Libs\Dao;

use stdClass;

class RolDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll(bool $estado)
    {
        $result = RolModel::where('Estado', $estado)
            ->orderBy('IdRol', 'DESC')
            ->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = RolModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdRol = 0;
            $model->Nombre = '';
            $model->Descripcion = '';
            $model->Estado = 0;
        }
        return $model;
    }

    public function getAllSimple(int $id)
    {
        $model = RolModel::get();
        return $model;
    }
    public function create($obj)
    {
        //$model = RolModel::get();
        $model = new RolModel();
        $model->IdRol = $obj->IdRol;
        $model->Nombre = $obj->Nombre;
        $model->Descripcion = $obj->Descripcion;
        $model->Estado = $obj->Estado;
        return $model->save();
    }
    public function update($obj)
    {
        $model = RolModel::find($obj->IdRol);
        //$model = new RolModel();
        $model->Nombre = $obj->Nombre;
        $model->Descripcion = $obj->Descripcion;
        $model->Estado = $obj->Estado;
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = RolModel::find($id);
        return $model->delete();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE roles SET estado=0 where IdRol?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
