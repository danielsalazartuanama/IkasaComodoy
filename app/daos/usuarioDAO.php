<?php

namespace App\Daos;

use App\Models\UsuarioModel;
use Libs\Connection;
use Libs\Dao;
use stdClass;

class UsuarioDAO extends Dao
{
    public function __construct()
    {
        $this->loadEloquet();
    }
    public function getAll(bool $estado)
    {
        $result = UsuarioModel::where('Estado', $estado)->orderBy('IdUsuario', 'DESC')->get();
        return $result;
    }
    public function get(int $id)
    {
        $model = UsuarioModel::find($id);
        if (is_null($model)) {
            $model = new StdClass();
            $model->IdUsuario = 0;            
            $model->Apellidos = '';
            $model->Nombres = '';
            $model->Direccion = '';
            $model->Telf = '';
            $model->Usuario = '';
            $model->Clave = '';
            $model->Correo = '';
           
            $model->Estado = 0;
        }
        return $model;
    }
    public function create($obj)
    {
        $model = new UsuarioModel();
        $model->IdUsuario = $obj->IdUsuario;
        $model->IdTipo = $obj->IdTipo;
        $model->Apellidos = $obj->Apellidos;
        $model->Nombres = $obj->Nombres;
        $model->Direccion = $obj->Direccion;
        $model->Telf = $obj->Telf;
        $model->Usuario = $obj->Usuario;
        $model->Clave = $obj->Clave;
        $model->Correo = $obj->Correo;
        $model->Estado = $obj->Estado;
        return $model->save();
    }
    public function update($obj)
    {
        $model = UsuarioModel::find($obj->IdUsuario);
        $model->IdTipo = $obj->IdTipo;
        $model->Apellidos = $obj->Apellidos;
        $model->Nombres = $obj->Nombres;
        $model->Direccion = $obj->Direccion;
        $model->Telf = $obj->Telf;
        $model->Usuario = $obj->Usuario;
        $model->Clave = $obj->Clave;
        $model->Correo = $obj->Correo;
        $model->Estado = $obj->Estado;
        return $model->save();
    }
    public function delete(int $id)
    {
        $model = UsuarioModel::find($id);
        return $model->delete();
    }
   
}
