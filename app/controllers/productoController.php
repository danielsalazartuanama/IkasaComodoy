<?php

namespace App\Controllers;

use GUMP;
use App\Models\CategoriaModel;
use App\Models\MarcaModel;
use App\Models\ProductoModel;
use App\Models\ProveedorModel;
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
        //$productos = ProductoModel::get();
        echo $this->template->render('detail', [
            'data' => $data,
            'categorias' => $categorias,
            'marcas' => $marcas,
            'proveedores' => $proveedores,
        ]);
    }
    public function save()
    {

        $valid_data = $this->valida($_POST);
        $status = $valid_data['status'];
        $data = $valid_data['data'];
        if ($status == true) {
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

            $archivo = $_FILES["imagen"];
            $extension = pathinfo($archivo["name"], PATHINFO_EXTENSION);
            $obj->Imagen = $obj->Nombre . date('m-d-Y') . "-" . time() . "." . $extension;
            move_uploaded_file($archivo["tmp_name"],  "img/ $obj->Imagen");

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
                $rpta = $this->dao->update($obj);
            } else {
                $rpta = $this->dao->create($obj);
            }
            if ($rpta) {
                $response = [
                    'success' => 1,
                    'message' => 'producto guardada correctamente',
                    'redirection' => URL . 'producto/index'
                ];
            } else {
                $response = [
                    'success' => 1,
                    'message' => 'Error al guardar los datos',
                    'redirection' => ''
                ];
            }
        } else {
            $response = [
                'success' => -1,
                'message' => $data,
                'redirection' => ''
            ];
        }
        echo json_encode($response);
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'producto/index');
    }
    public function valida($datos)
    {
        $gump = new GUMP('es');
        $gump->validation_rules([
            'nombre' => 'required|max_len,10',
            'precio' => 'required|max_len,10',
            'stock' => 'required|max_len,10',
        ]);
        $valid_data = $gump->run($datos);
        if ($gump->errors()) {
            $response = [
                'status' => false,
                'data' => $gump->get_errors_array()
            ];
        } else {
            $response = [
                'status' => true,
                'data' => $valid_data
            ];
        }
        return $response;
    }
}
