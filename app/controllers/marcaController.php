<?php
namespace App\Controllers;

use App\Daos\MarcaDAO;
use Libs\Controller;
use stdClass;

class MarcaController extends Controller{


    public function __construct()
    {
        $this->loadDirectoryTemplate('marca');
        $this->loadDAO('marca');
    }

    public function index()
    {
        $data=(new MarcaDAO())->getAll();
        echo $this->template->render('index',['data'=>$data]);
    }
    public function detail($param = null)
    {
        $id = isset($param[0]) ? $param[0] : 0;
        $data = $this->dao->get($id);
        echo $this->template->render('detail',['data'=>$data]);
        // myEcho($data);
    }

    public function save(){

        
        $obj=new stdClass();

       $obj->id= isset($_POST['idmarca'])?$_POST['idmarca']:0;
        $obj->nombre=isset($_POST['nombre'])?$_POST['nombre']:'';
        $obj->descripcion=isset($_POST['descripcion'])?$_POST['descripcion']:'';
        $obj->estado=isset($_POST['estado'])?$_POST['estado']:false;



        if ($obj->id>0) {
         $this->dao->update($obj);
        }else{
            $this->dao->create($obj);
        }
        header('Location:'.URL.'marca/index');
    }


}