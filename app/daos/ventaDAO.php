<?php

namespace App\Daos;

use App\Models\VentaModel;
use Libs\Connection;
use Libs\Dao;
use stdClass;

class VentaDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll()
    {
        $result = VentaModel::orderBy('IdVenta', 'DESC')->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = VentaModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdVenta = 0;
            $model->Serie = '';
            $model->Numero = '';
            $model->Subtotal = 0;
            $model->IGV = 0;
            $model->Total = 0;
            $model->Cancelado = 0;
            $model->PorcentajeIGV = 0;
            $model->Pago = 0;
            $model->Cambio = 0;
        }
        return $model;
    }

    public function create($obj)
    {
        $model = new VentaModel();
        $model->IdVenta = $obj->IdVenta;
        $model->IdUsuario = $obj->IdUsuario;
        $model->IdCliente = $obj->IdCliente;
        $model->IdFormaPago = $obj->IdFormaPago;
        $model->IdComprobante = $obj->IdComprobante;
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
    public function update($obj)
    {
        $model = VentaModel::find($obj->IdVenta);
        $model->IdUsuario = $obj->IdUsuario;
        $model->IdCliente = $obj->IdCliente;
        $model->IdFormaPago = $obj->IdFormaPago;
        $model->IdComprobante = $obj->IdComprobante;
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
        $model = VentaModel::find($id);
        return $model->delete();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE formapago SET estado=0 where IdVenta?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
