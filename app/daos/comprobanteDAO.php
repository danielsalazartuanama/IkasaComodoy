<?php

namespace App\Daos;

use App\Models\ComprobanteModel;
use Libs\Connection;
use Libs\Dao;
use stdClass;

class ComprobanteDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll()
    {
        $result = ComprobanteModel::orderBy('IdComprobante', 'DESC')->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = comprobanteModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdComprobante = 0;
            $model->Nombre = '';
        }
        return $model;
    }

    public function create($obj)
    {
        $model = new comprobanteModel();
        $model->IdComprobante = $obj->IdComprobante;
        $model->Nombre = $obj->Nombre;
        return $model->save();
    }
    public function update($obj)
    {
        $model = comprobanteModel::find($obj->IdComprobante);
        $model->Nombre = $obj->Nombre;
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = comprobanteModel::find($id);
        return $model->delete();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE comprobante SET estado=0 where idcomprobante?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
