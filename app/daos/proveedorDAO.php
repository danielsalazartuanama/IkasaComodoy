<?php

namespace App\Daos;

use App\Models\ProveedorModel;
use Libs\Connection;
use Libs\Dao;

use stdClass;

class ProveedorDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll(bool $estado)
    {
        $result = ProveedorModel::where('Estado', $estado)
            ->orderBy('IdProve', 'DESC')
            ->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = ProveedorModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdProve = 0;
            $model->Nombre = '';
            $model->Email = '';
            $model->Direccion = '';
            $model->Telefono = '';
            $model->Ruc = '';
            $model->Dni = '';
            $model->Estado = 0;
        }
        return $model;
    }
    public function create($obj)
    {
        $model = new ProveedorModel();
        $model->IdProve = $obj->IdProve;
        $model->Nombre = $obj->Nombre;
        $model->Email = $obj->Email;
        $model->Direccion = $obj->Direccion;
        $model->Telefono = $obj->Telefono;
        $model->Ruc = $obj->Ruc;
        $model->Dni = $obj->Dni;
        $model->Estado = $obj->Estado;
        return $model->save();
    }
    public function update($obj)
    {
        $model = ProveedorModel::find($obj->IdProve);
        //$model = new ProveedorModel();
        $model->Nombre = $obj->Nombre;
        $model->Nombre = $obj->Nombre;
        $model->Email = $obj->Email;
        $model->Direccion = $obj->Direccion;
        $model->Telefono = $obj->Telefono;
        $model->Ruc = $obj->Ruc;
        $model->Dni = $obj->Dni;
        $model->Estado = $obj->Estado;
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = ProveedorModel::find($id);
        return $model->delete();
    }
    public function baja(int $id)
    {
        $sql = "UPDATE proveedores SET estado=0 where IdProve?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id, \PDO::PARAM_INT);
        return $stmt->execute();
    }
}
