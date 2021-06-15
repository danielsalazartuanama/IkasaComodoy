<?php

namespace App\Controllers;

use App\Daos\ProveedorDAO;
use App\Models\proveedorModel;
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
        $data = $this->dao->get($id);
        echo $this->template->render('detail', [
            'data' => $data,
        ]);
    }
    public function save()
    {
        $obj = new stdClass();
        $obj->IdCateg = isset($_POST['idcateg']) ? $_POST['idcateg'] : 0;
        $obj->Nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
        $obj->Email = isset($_POST['email']) ? $_POST['email'] : '';
        $obj->Direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
        $obj->Telefono = isset($_POST['telefono']) ? $_POST['telefono'] : '';
        $obj->Ruc = isset($_POST['ruc']) ? $_POST['ruc'] : '';
        $obj->Dni = isset($_POST['dni']) ? $_POST['dni'] : '';

        if (isset($_POST['estado'])) {
            if ($_POST['estado'] == 'on') {
                $obj->Estado = true;
            } else {
                $obj->Estado = false;
            }
        } else {
            $obj->Estado = false;
        }

        if ($obj->IdCateg > 0) {
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
