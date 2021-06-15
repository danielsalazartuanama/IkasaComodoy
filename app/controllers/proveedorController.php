<?php

namespace App\Controllers;

use App\Daos\proveedorDAO;

use Libs\Controller;
use stdClass;

class ProveedorController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('proveedor');
        $this->loadDAO('proveedor');
    }
    public function index()
    {
        $data = $this->dao->getAll(true);
        echo $this->template->render('index', ['data' => $data]);
    }
    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        //$proveedors = $this->dao->getAllSimple(1);
        $data = $this->dao->get($id);
        echo $this->template->render('detail', ['data' => $data]);
        //myEcho($data);
    }
    public function save()
    {
        $obj = new stdClass();
        $obj->IdProve = isset($_POST['idprove']) ? $_POST['idprove'] : 0;
        $obj->Nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $obj->Email = isset($_POST['email']) ? $_POST['email'] : '';
        $obj->Direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
        $obj->Telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
        $obj->Ruc = isset($_POST['ruc']) ? $_POST['ruc'] : '';
        $obj->Dni = isset($_POST['dni']) ? $_POST['dni'] : '';
        //$obj->estado = isset($_POST['estado']) ? $_POST['estado'] : '';

        if (isset($_POST['estado'])) {
            if ($_POST['estado'] == 'on') {
                $obj->Estado = true;
            } else {
                $obj->Estado = false;
            }
        } else {
            $obj->Estado = false;
        }

        if ($obj->IdProve > 0) {
            $this->dao->update($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'proveedor/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        if ($id > 0) {
            $this->dao->delete($id);
        }
        header('Location:' . URL . 'proveedor/index');
    }
}
