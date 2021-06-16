<?php

namespace App\Controllers;

use App\Daos\ClienteDAO;
use GUMP;
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
        $valid_data = $this->valida($_POST);
        $status = $valid_data['status'];
        $data = $valid_data['data'];
        if ($status == true) {
            $obj = new stdClass();
            $obj->IdCliente = isset($_POST['idcliente']) ? $_POST['idcliente'] : 0;
            $obj->Nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
            $obj->Apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
            $obj->Direccion = isset($_POST['direccion']) ? $_POST['direccion'] : '';
            $obj->Telf = isset($_POST['telf']) ? $_POST['telf'] : '';
            $obj->CreditoLimite = isset($_POST['creditolimite']) ? $_POST['creditolimite'] : '';
            $obj->Ruc = isset($_POST['ruc']) ? $_POST['ruc'] : '';

            if ($obj->IdCliente > 0) {
                $rpta = $this->dao->update($obj);
            } else {
                $rpta = $this->dao->create($obj);
            }
            if ($rpta) {
                $response = [
                    'success' => 1,
                    'message' => 'Categoria guardada correctamente',
                    'redirection' => URL . 'cliente/index'
                ];
            } else {
                $response = [
                    'success' => 1,
                    'message' => 'Error al guardar los datos',
                    'redirection' => ''
                ];
            }
        } else {
            $response = [
                'success' => -1,
                'message' => $data,
                'redirection' => ''
            ];
        }
        echo json_encode($response);
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $this->dao->delete($id);
        header('Location:' . URL . 'cliente/index');
    }
    public function valida($datos)
    {
        $gump = new GUMP('es');
        $gump->validation_rules([
            'apellidos' => 'required|max_len,10',
            'nombres' => 'required|max_len,10',
            'direccion' => 'min_len,5|max_len,100',
            'telf' => 'min_len,5|max_len,100',
            'creditolimite' => 'min_len,5|max_len,100',
            'ruc' => 'min_len,11|max_len,11'
        ]);
        $valid_data = $gump->run($datos);
        if ($gump->errors()) {
            $response = [
                'status' => false,
                'data' => $gump->get_errors_array()
            ];
        } else {
            $response = [
                'status' => true,
                'data' => $valid_data
            ];
        }
        return $response;
    }
}
