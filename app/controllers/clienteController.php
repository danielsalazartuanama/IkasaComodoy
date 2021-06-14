<?php

namespace App\Controllers;

use App\Daos\ClienteDAO;

use Libs\Controller;
use stdClass;

class ClienteController extends Controller
{    
    public function __construct()
    {
        $this->loadDirectoryTemplate('cliente');
        $this->loadDAO('cliente');
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
        $obj->idcliente = isset($_POST['idcliente']) ? $_POST['idcliente'] : 0;        
        $obj->nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
        $obj->apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
        $obj->direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
        $obj->telf = isset($_POST['telf']) ? $_POST['telf'] : '';
        $obj->creditolimite = isset($_POST['creditolimite']) ? $_POST['creditolimite'] : '';
        $obj->ruc = isset($_POST['ruc']) ? $_POST['ruc'] : '';       

        if ($obj->idcliente > 0) {
            $this->dao->update($obj);
        } else {
            $this->dao->create($obj);
        }
        header('Location:' . URL . 'cliente/index');
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'cliente/index');
    }
}
