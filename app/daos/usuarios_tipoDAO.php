<?php

namespace App\Daos;

use App\Models\Usuarios_tipoModel;
use App\Models\Usuarios_tipoModelModel;
use Libs\Connection;
use Libs\Dao;
use stdClass;

class Usuarios_tipoDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll()
    {
        $result = Usuarios_tipoModel::orderBy('IdTipo', 'DESC')->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = Usuarios_tipoModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdTipo = 0;
            $model->Nombre = '';
        }
        return $model;
    }

    public function create($obj)
    {
        $model = new Usuarios_tipoModel();
        $model->IdTipo = $obj->IdTipo;
        $model->Nombre = $obj->Nombre;
        return $model->save();
    }
    public function update($obj)
    {
        $model = Usuarios_tipoModel::find($obj->IdTipo);
        $model->Nombre = $obj->Nombre;
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = Usuarios_tipoModel::find($id);
        return $model->delete();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE Usuarios_tipoModel SET estado=0 where idtipo?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
