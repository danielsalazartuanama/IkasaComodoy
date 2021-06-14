<?php

namespace App\Controllers;

use App\Daos\FormapagoDAO;

use Libs\Controller;
use stdClass;

class FormapagoController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('formapago');
        $this->loadDAO('formapago');
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
        //myEcho($data);
    }
    public function save()
    {
        $obj = new stdClass();
        $obj->IdFormaPago = isset($_POST['idformapago']) ? $_POST['idformapago'] : 0;
        $obj->Nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';


        if ($obj->IdFormaPago > 0) {
            $this->dao->update($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'formapago/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'formapago/index');
    }
}
