<?php

namespace App\Daos;

use App\Models\IngresoModel;
use Libs\Connection;
use Libs\Dao;
use stdClass;

class ingresoDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll()
    {
        $result = IngresoModel::orderBy('IdIngreso', 'DESC')->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = IngresoModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdIngreso = 0;
            $model->Serie = '';
            $model->Numero = '';
            $model->Subtotal = 0;
            $model->IGV = 0;
            $model->Total = 0;            
        }
        return $model;
    }

    public function create($obj)
    {
        $model = new IngresoModel();
        $model->IdIngreso = $obj->IdIngreso;
        $model->IdProveedor = $obj->IdProveedor;
        $model->IdUsuario = $obj->IdUsuario;
        $model->IdFormaPago = $obj->IdFormaPago;        
        $model->Serie = $obj->Serie;
        $model->Numero = $obj->Numero;
        $model->Subtotal = $obj->Subtotal;
        $model->IGV = $obj->IGV;
        $model->Total = $obj->Total;        
        return $model->save();
    }
    public function update($obj)
    {
        $model = IngresoModel::find($obj->IdIngreso);
        $model->IdProveedor = $obj->IdProveedor;
        $model->IdUsuario = $obj->IdUsuario;
        $model->IdFormaPago = $obj->IdFormaPago;          
        $model->Serie = $obj->Serie;
        $model->Numero = $obj->Numero;
        $model->Subtotal = $obj->Subtotal;
        $model->IGV = $obj->IGV;
        $model->Total = $obj->Total;
        $model->Cancelado = $obj->Cancelado;
        $model->PorcentajeIGV = $obj->PorcentajeIGV;
        $model->Pago = $obj->Pago;
        $model->Cambio = $obj->Cambio;
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = IngresoModel::find($id);
        return $model->delete();
    }   
}
