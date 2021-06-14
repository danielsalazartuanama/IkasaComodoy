<?php

namespace App\Controllers;

use App\Daos\UnidadDAO;

use Libs\Controller;
use stdClass;

class UnidadController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('unidad');
        $this->loadDAO('unidad');
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
        $obj->IdUnidad = isset($_POST['idunidad']) ? $_POST['idunidad'] : 0;
        $obj->Nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';

        if (isset($_POST['estado'])) {
            if ($_POST['estado'] == 'on') {
                $obj->Estado = true;
            } else {
                $obj->Estado = false;
            }
        } else {
            $obj->Estado = false;
        }

        if ($obj->IdUnidad > 0) {
            $this->dao->update($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'unidad/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'unidad/index');
    }
}
