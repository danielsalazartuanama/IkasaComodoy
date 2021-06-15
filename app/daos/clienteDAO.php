<?php

namespace App\Daos;

use App\Models\ClienteModel;
use Libs\Connection;
use Libs\Dao;
use stdClass;

class cLienteDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll()
    {
        $result = ClienteModel::orderBy('IdCliente', 'DESC')->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = clienteModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdCliente = 0;
            $model->Nombres = '';
            $model->Apellidos = '';
            $model->Direccion = '';
            $model->Telf = '';
            $model->CreditoLimite = 0;
            $model->Ruc = '';      
        }
        return $model;
    }
    public function create($obj)
    {
        $model = new clienteModel();
        $model->IdCliente = $obj->IdCliente;
        $model->Nombres = $obj->Nombres;
        $model->Apellidos = $obj->Apellidos;
        $model->Direccion = $obj->Direccion;
        $model->Telf = $obj->Telf;
        $model->CreditoLimite = $obj->CreditoLimite;
        $model->Ruc = $obj->Ruc;      
        return $model->save();
    }
    public function update($obj)
    {
        $model = clienteModel::find($obj->IdCliente);
        $model->Nombres = $obj->Nombres;
        $model->Apellidos = $obj->Apellidos;
        $model->Direccion = $obj->Direccion;
        $model->Telf = $obj->Telf;
        $model->CreditoLimite = $obj->CreditoLimite;
        $model->Ruc = $obj->Ruc;        
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = clienteModel::find($id);
        return $model->delete();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE clientes SET estado=0 where idcliente?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
