<?php

namespace App\Controllers;

use App\Daos\CategoriaDAO;

use Libs\Controller;
use stdClass;

class CategoriaController extends Controller
{
    public    int  $param;
    public function __construct()
    {
        $this->loadDirectoryTemplate('categoria');
        $this->loadDAO('categoria');
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
        echo $this->template->render('detail', ['data' => $data]);
        //myEcho($data);
    }
    public function save()
    {
        $obj = new stdClass();
        $obj->idcateg = isset($_POST['idcateg']) ? $_POST['idcateg'] : 0;
        $this->param = $obj->idcateg;
        $obj->nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $obj->descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
        //$obj->estado = isset($_POST['estado']) ? $_POST['estado'] : '';

        if (isset($_POST['estado'])) {
            if ($_POST['estado'] == 'on') {
                $obj->estado = true;
            } else {
                $obj->estado = false;
            }
        } else {
            $obj->estado = false;
        }

        if ($obj->idcateg > 0) {
            $this->dao->update($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'categoria/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'categoria/index');
    }
}
