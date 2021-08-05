<?php

namespace App\Daos;

use App\Models\CompraModel;
use Libs\Connection;
use Libs\Dao;
use stdClass;

class CompraDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll(bool $estado)
    {
        $result = CompraModel::where('Estado', $estado)
        ->orderBy('IdCompras', 'DESC')->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = CompraModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdCompras = 0;               
            $model->Impuesto = 0;
            $model->Total = 0;
            $model->Estado =0;        
        }
        return $model;
    }

    public function create($obj)
    {
        $model = new CompraModel();
        $model->IdCompras = $obj->IdCompras;
        $model->IdProve = $obj->IdProve;
        $model->IdProduct = $obj->IdProduct;
        $model->Impuesto = $obj->Impuesto;
        $model->Total = $obj->Total;
        $model->Estado = $obj->Estado;
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = CompraModel::find($id);
        return $model->delete();
    }   
    
}
