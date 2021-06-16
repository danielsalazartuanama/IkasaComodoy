<?php

namespace App\Controllers;
use Libs\Controller;
use stdClass;

class ArticuloController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('articulo');
        $this->loadDAO('articulo');
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

        echo $this->template->render('detail', [
            'data' => $data]);
    }
    public function save()
    {
        $obj = new stdClass();
        $obj->IdArticulo = isset($_POST['idarticulo']) ? $_POST['idarticulo'] : 0;
        $obj->IdCategoria = isset($_POST['idcategoria']) ? $_POST['idcategoria'] : 0;
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
        header('Location:' . URL . 'articulo/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'articulo/index');
    }
}
