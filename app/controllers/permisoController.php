<?php

namespace App\Controllers;

use App\Daos\PermisoDAO;
use App\Models\PermisoModel;
use App\Models\Usuarios_tipoModel;
use Libs\Controller;
use stdClass;

class PermisoController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('permiso');
        $this->loadDAO('permiso');
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
        $usuarios_tipo = Usuarios_tipoModel::get();
        echo $this->template->render('detail', [
            'data' => $data,
            'usuarios_tipo' => $usuarios_tipo,
        ]);
        //myEcho($data);
    }
    public function save()
    {
        $obj = new stdClass();
        $obj->IdPermiso = isset($_POST['idpermiso']) ? $_POST['idpermiso'] : 0;
        $obj->IdTipo = isset($_POST['idtipo']) ? $_POST['idtipo'] : 0;
        $obj->Tablas = isset($_POST['tablas']) ? $_POST['tablas'] : '';

        if ($obj->IdPermiso > 0) {
            $this->dao->update($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'permiso/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'permiso/index');
    }
}
