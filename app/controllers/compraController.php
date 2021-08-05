<?php

namespace App\Controllers;

use App\Daos\compraDAO;
use App\Models\ClienteModel;
use App\Models\ComprobanteModel;
use App\Models\formapagoModel;
use App\Models\ProductoModel;
use App\Models\ProveedorModel;
use App\Models\UsuarioModel;
use Libs\Controller;
use stdClass;

class CompraController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('compra');
        $this->loadDAO('compra');
    }
    public function index()
    {
        $data = $this->dao->getAll(true);

        echo $this->template->render(
            'index',
            [
                'data' => $data,

            ]
        );
    }
    public function indexd()
    {
        $data = $this->dao->getAll(false);

        echo $this->template->render(
            'index',
            [
                'data' => $data,

            ]
        );
    }
    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $data = $this->dao->get($id);
        $proveedores = ProveedorModel::get();
        $productos = ProductoModel::get();

        echo $this->template->render('detail', [
            'data' => $data,
            'proveedores' => $proveedores,
            'productos' => $productos,
        ]);
    }
    public function save()
    {
        $obj = new stdClass();
        $obj->IdCompras = isset($_POST['idcompras']) ? $_POST['idcompras'] : 0;
        $obj->IdProve = isset($_POST['idproveedor']) ? $_POST['idproveedor'] : 0;
        $obj->IdProduct = isset($_POST['idproduct']) ? $_POST['idproduct'] : 0;       
        $obj->Impuesto = isset($_POST['impuesto']) ? $_POST['impuesto'] : '';
        $obj->Total = isset($_POST['total']) ? $_POST['total'] : '';


        if (isset($_POST['estado'])) {
            if ($_POST['estado'] == 'on') {
                $obj->Estado = true;
            } else {
                $obj->Estado = false;
            }
        } else {
            $obj->Estado = false;
        }

        if ($obj->IdCompras > 0) {
            $this->dao->create($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'compra/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'compra/index');
    }
}
