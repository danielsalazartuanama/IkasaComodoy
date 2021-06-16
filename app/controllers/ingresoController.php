<?php

namespace App\Controllers;

use App\Daos\ingresoDAO;
use App\Models\FormapagoModel;
use App\Models\ProveedorModel;
use App\Models\UsuarioModel;
use Libs\Controller;
use stdClass;

class IngresoController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('ingreso');
        $this->loadDAO('ingreso');
    }
    public function index()
    {
        $data = $this->dao->getAll();
        echo $this->template->render('index', ['data' => $data]);
    }
    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $data = $this->dao->get($id);
        $proveedores = ProveedorModel::get();
        $usuarios = UsuarioModel::get();
        $formapagos = FormapagoModel::get();
        echo $this->template->render('detail', [
            'data' => $data,
            'proveedores' => $proveedores,
            'usuarios' => $usuarios,
            'formapagos' => $formapagos,
        ]);
        //myEcho($data);
    }
    public function save()
    {
        $obj = new stdClass();
        $obj->Idingreso = isset($_POST['idingreso']) ? $_POST['idingreso'] : 0;
        $obj->Idproveedor = isset($_POST['idproveedor']) ? $_POST['idproveedor'] : 0;
        $obj->IdUsuario = isset($_POST['idusuario']) ? $_POST['idusuario'] : 0;
        $obj->IdFormaPago = isset($_POST['idformapago']) ? $_POST['idformapago'] : 0;
        $obj->Serie = isset($_POST['serie']) ? $_POST['serie'] : '';
        $obj->Numero = isset($_POST['numero']) ? $_POST['numero'] : '';
        $obj->Subtotal = isset($_POST['subtotal']) ? $_POST['subtotal'] : '';
        $obj->IGV = isset($_POST['igv']) ? $_POST['igv'] : '';
        $obj->Total = isset($_POST['total']) ? $_POST['total'] : '';


        if ($obj->Idingreso > 0) {
            $this->dao->update($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'ingreso/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'ingreso/index');
    }
}
