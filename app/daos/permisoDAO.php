<?php

namespace App\Daos;

use App\Models\PermisoModel;
use Libs\Connection;
use Libs\Dao;
use stdClass;

class PermisoDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll()
    {
        $result = PermisoModel::orderBy('IdPermiso', 'DESC')->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = PermisoModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdPermiso = 0;
            $model->Tablas = '';
        }
        return $model;
    }

    public function create($obj)
    {
        $model = new PermisoModel();
        $model->IdPermiso = $obj->IdPermiso;
        $model->Idtipo = $obj->IdTipo;
        $model->Tablas = $obj->Tablas;
        return $model->save();
    }
    public function update($obj)
    {
        $model = PermisoModel::find($obj->IdPermiso);
        $model->Idtipo = $obj->IdTipo;
        $model->Tablas = $obj->Tablas;
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = PermisoModel::find($id);
        return $model->delete();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE formapago SET estado=0 where IdPermiso?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
