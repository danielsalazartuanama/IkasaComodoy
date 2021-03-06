<?php

namespace App\Controllers;

use App\Daos\Usuarios_tipoDAO;

use Libs\Controller;
use stdClass;

class Usuarios_tipoController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('usuarios_tipo');
        $this->loadDAO('usuarios_tipo');
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
        echo $this->template->render('detail', ['data' => $data]);
    }
    public function save()
    {
        $obj = new stdClass();
        $obj->IdTipo = isset($_POST['idtipo']) ? $_POST['idtipo'] : 0;
        $obj->Nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';

        if ($obj->IdTipo > 0) {
            $this->dao->update($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'usuarios_tipo/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'usuarios_tipo/index');
    }
}
