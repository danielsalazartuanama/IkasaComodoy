<?php

namespace App\Controllers;

use App\Daos\productoDAO;

use Libs\Controller;
use stdClass;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('producto');
        $this->loadDAO('producto');
        $this->loadDAOcateg('categoria');
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
        $categorias = $this->categ->getAllSimple($id);

        echo $this->template->render('detail', ['data' => $data, 'categorias' => $categorias]);
        //myEcho($data);

    }
    public function save()
    {
        $obj = new stdClass();
        $obj->idproduct = isset($_POST['idproduct']) ? $_POST['idproduct'] : 0;
        $obj->idmarca = isset($_POST['idmarca']) ? $_POST['idmarca'] : 0;
        $obj->idcateg = isset($_POST['idcateg']) ? $_POST['idcateg'] : 0;
        $obj->idunidad = isset($_POST['idunidad']) ? $_POST['idunidad'] : 0;
        $obj->nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $obj->precio = isset($_POST['precio']) ? $_POST['precio'] : '';
        $obj->precioventa = isset($_POST['precioventa']) ? $_POST['precioventa'] : '';
        $obj->stock = isset($_POST['stock']) ? $_POST['stock'] : '';
        $obj->stockminimo = isset($_POST['stockminimo']) ? $_POST['stockminimo'] : '';

        if (isset($_POST['estado'])) {
            if ($_POST['estado'] == 'on') {
                $obj->estado = true;
            } else {
                $obj->estado = false;
            }
        } else {
            $obj->estado = false;
        }

        if ($obj->idproduct > 0) {
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
