<?php

namespace App\Controllers;

use App\Daos\UsuarioDAO;
use App\Models\Usuarios_tipoModel;
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
        $tipos = Usuarios_tipoModel::get();
        echo $this->template->render('detail', [
            'data' => $data,
            'tipos' => $tipos,
        ]);
        //myEcho($data);
    }
    public function save()
    {
        $obj = new stdClass();
        $obj->IdUsuario = isset($_POST['idusuario']) ? $_POST['idusuario'] : 0;
        $obj->IdTipo = isset($_POST['idtipo']) ? $_POST['idtipo'] : 0;
        $obj->Apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
        $obj->Nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
        $obj->Direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
        $obj->Telf = isset($_POST['telf']) ? $_POST['telf'] : '';
        $obj->Usuario = isset($_POST['usuario']) ? $_POST['usuario'] : '';
        $obj->Clave = isset($_POST['clave']) ? $_POST['clave'] : '';
        $obj->Correo = isset($_POST['correo']) ? $_POST['correo'] : '';
        if (isset($_POST['estado'])) {
            if ($_POST['estado'] == 'on') {
                $obj->Estado = true;
            } else {
                $obj->Estado = false;
            }
        } else {
            $obj->Estado = false;
        }

        if ($obj->IdUsuario > 0) {
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
