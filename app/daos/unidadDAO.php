<?php

namespace App\Daos;

use App\Models\UnidadModel;
use Libs\Connection;
use Libs\Dao;
use stdClass;

class UnidadDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll(bool $estado)
    {
        $result = UnidadModel::where('Estado', $estado)
            ->orderBy('IdUnidad', 'DESC')
            ->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = UnidadModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdUnidad = 0;
            $model->Nombre = '';
            $model->Estado = 0;
        }
        return $model;
    }

    public function getAllSimple(int $id)
    {
        $model = UnidadModel::get();
        return $model;
    }
    public function create($obj)
    {
        //$model = UnidadModel::get();
        $model = new UnidadModel();
        $model->IdUnidad = $obj->IdUnidad;
        $model->Nombre = $obj->Nombre;
        $model->Estado = $obj->Estado;
        return $model->save();
    }
    public function update($obj)
    {
        $model = UnidadModel::find($obj->IdUnidad);
        $model->Nombre = $obj->Nombre;
        $model->Estado = $obj->Estado;
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = UnidadModel::find($id);
        return $model->delete();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE unidades SET estado=0 where idunidad?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
