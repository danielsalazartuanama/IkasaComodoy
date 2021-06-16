<?php

namespace App\Controllers;

use GUMP;
use App\Daos\CategoriaDAO;
use App\Models\CategoriaModel;
use Libs\Controller;
use stdClass;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('categoria');
        $this->loadDAO('categoria');
    }
    public function index()
    {
        $data = $this->dao->getAll(true);
        echo $this->template->render('index', ['data' => $data]);
    }
    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        //$categorias = $this->dao->getAllSimple(1);
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
            //el POST se uedreemplazar por $data
            $obj->IdCateg = isset($_POST['idcateg']) ? $_POST['idcateg'] : 0;
            $obj->Nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
            $obj->Descripcion = isset($_POST['descripcion']) ? $_POST['descripcion'] : '';
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

            if ($obj->IdCateg > 0) {
                $rpta = $this->dao->update($obj);
            } else {
                $rpta = $this->dao->create($obj);
            }
            if ($rpta) {
                $response = [
                    'success' => 1,
                    'message' => 'Categoria guardada correctamente',
                    'redirection' => URL . 'categoria/index'
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
        //return $response;
    }
    public function eliminar($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        if ($id > 0) {
            $this->dao->delete($id);
        }
        header('Location:' . URL . 'categoria/index');
    }
    public function valida($datos)
    {
        $gump = new GUMP('es');
        $gump->validation_rules([
            'nombre' => 'required|max_len,10',
            'descripcion' => 'min_len,5|max_len,100',
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
