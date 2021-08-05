<?php

namespace App\Controllers;

use App\Daos\VentaDAO;
use App\Models\ClienteModel;
use App\Models\ComprobanteModel;
use App\Models\formapagoModel;
use App\Models\ProductoModel;
use App\Models\UsuarioModel;
use Libs\Controller;
use stdClass;

class VentaController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('venta');
        $this->loadDAO('venta');
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
        $usuarios = UsuarioModel::get();
        $clientes = ClienteModel::get();
        $formapagos = formapagoModel::get();
        $comprobantes = ComprobanteModel::get();
        $productos = ProductoModel::get();
        
        echo $this->template->render('detail', [
            'data' => $data,
            'usuarios' => $usuarios,
            'clientes' => $clientes,
            'formapagos' => $formapagos,
            'comprobantes' => $comprobantes,
            'productos' => $productos,

        ]);
    }
    public function save()
    {
        $obj = new stdClass();
        $obj->IdVenta = isset($_POST['idventa']) ? $_POST['idventa'] : 0;
        $obj->IdUsuario = isset($_POST['idusuario']) ? $_POST['idusuario'] : 0;
        $obj->IdCliente = isset($_POST['idcliente']) ? $_POST['idcliente'] : 0;
        $obj->IdFormaPago = isset($_POST['idforma']) ? $_POST['idforma'] : 0;
        $obj->IdComprobante = isset($_POST['idcomprobante']) ? $_POST['idcomprobante'] : 0;
        $obj->Serie = isset($_POST['serie']) ? $_POST['serie'] : '';
        $obj->Numero = isset($_POST['numero']) ? $_POST['numero'] : '';
        $obj->Subtotal = isset($_POST['subtotal']) ? $_POST['subtotal'] : '';
        $obj->IGV = isset($_POST['igv']) ? $_POST['igv'] : '';
        $obj->Total = isset($_POST['total']) ? $_POST['total'] : '';
        $obj->Cancelado = isset($_POST['cancelado']) ? $_POST['cancelado'] : '';
        $obj->PorcentajeIGV = isset($_POST['procentajeigv']) ? $_POST['procentajeigv'] : '';
        $obj->Pago = isset($_POST['pago']) ? $_POST['pago'] : '';
        $obj->Cambio = isset($_POST['cambio']) ? $_POST['cambio'] : '';

        if ($obj->IdVenta > 0) {
            $this->dao->update($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'venta/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'venta/index');
    }
}
