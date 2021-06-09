<?php

namespace App\Controllers;

use App\Daos\ComprobanteDAO;

use Libs\Controller;
use stdClass;

class ComprobanteController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('comprobante');
        $this->loadDAO('comprobante');
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
        $obj->idcomprobante = isset($_POST['idcomprobante']) ? $_POST['idcomprobante'] : 0;
        $obj->nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';


        if ($obj->idcomprobante > 0) {
            $this->dao->update($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'comprobante/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'comprobante/index');
    }
}
