<?php

namespace App\Controllers;

use App\Daos\UsuarioDAO;

use Libs\Controller;
use stdClass;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('usuario');
        $this->loadDAO('usuario');
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
        $obj->idusuario = isset($_POST['idusuario']) ? $_POST['idusuario'] : 0;
        $obj->apelidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
        $obj->nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
        $obj->direcciom = isset($_POST['direcciom']) ? $_POST['direcciom'] : '';
        $obj->telf = isset($_POST['telf']) ? $_POST['telf'] : '';
        $obj->usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
        $obj->clave = isset($_POST['clave']) ? $_POST['clave'] : '';
        $obj->correo = isset($_POST['correo']) ? $_POST['correo'] : '';
        $obj->fcreacion = isset($_POST['fcreacion']) ? $_POST['fcreacion'] : '';
        $obj->feliminacion = isset($_POST['feliminacion']) ? $_POST['feliminacion'] : '';
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

        if ($obj->idusuario > 0) {
            $this->dao->update($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'usuario/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'usuario/index');
    }
}
