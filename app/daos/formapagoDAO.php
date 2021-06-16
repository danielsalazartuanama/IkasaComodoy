<?php

namespace App\Daos;

use App\Models\formapagoModel;
use Libs\Connection;
use Libs\Dao;
use stdClass;

class FormapagoDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll()
    {
        $result = formapagoModel::orderBy('IdFormaPago', 'DESC')->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = formapagoModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdFormaPago = 0;
            $model->Nombre = '';
        }
        return $model;
    }

    public function create($obj)
    {
        $model = new formapagoModel();
        $model->IdFormaPago = $obj->IdFormaPago;
        $model->Nombre = $obj->Nombre;
        return $model->save();
    }
    public function update($obj)
    {
        $model = formapagoModel::find($obj->IdFormaPago);
        $model->Nombre = $obj->Nombre;
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = formapagoModel::find($id);
        return $model->delete();
    }
  
}
