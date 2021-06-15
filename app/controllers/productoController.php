<?php

namespace App\Controllers;

use App\Daos\ProductoDAO;
use App\Daos\CategoriaDAO;
use App\Models\CategoriaModel;
use App\Models\MarcaModel;
use App\Models\ProductoModel;
use App\Models\ProveedorModel;
use App\Models\UnidadModel;
use Libs\Controller;
use stdClass;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('producto');
        $this->loadDAO('producto');
        //$this->loadDAOcategoria('categoria');
    }
    public function index()
    {
        $data = $this->dao->getAll(true);
        echo $this->template->render('index', ['data' => $data]);
    }
    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $data = $this->dao->get($id);
        $categorias = CategoriaModel::get();
        $marcas = MarcaModel::get();
        $proveedores = ProveedorModel::get();
        $productos = ProductoModel::get();
        echo $this->template->render('detail', [
            'data' => $data,
            'categorias' => $categorias,
            'marcas' => $marcas,
            'proveedores' => $proveedores,
        ]);
    }
    public function save()
    {
        $obj = new stdClass();
        $obj->IdProduct = isset($_POST['idproduct']) ? $_POST['idproduct'] : 0;
        $obj->IdMarca = isset($_POST['idmarca']) ? $_POST['idmarca'] : 0;
        $obj->IdCateg = isset($_POST['idcategoria']) ? $_POST['idcategoria'] : 0;
        $obj->IdProve = isset($_POST['idproveedor']) ? $_POST['idproveedor'] : 0;
        $obj->Nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $obj->Precio = isset($_POST['precio']) ? $_POST['precio'] : '';
        $obj->PrecioVenta = isset($_POST['precioventa']) ? $_POST['precioventa'] : '';
        $obj->Stock = isset($_POST['stock']) ? $_POST['stock'] : '';
        $obj->StockMinimo = isset($_POST['stockminimo']) ? $_POST['stockminimo'] : '';

        if (isset($_POST['estado'])) {
            if ($_POST['estado'] == 'on') {
                $obj->Estado = true;
            } else {
                $obj->Estado = false;
            }
        } else {
            $obj->Estado = false;
        }

        if ($obj->IdProduct > 0) {
            $this->dao->update($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'producto/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'producto/index');
    }
}
