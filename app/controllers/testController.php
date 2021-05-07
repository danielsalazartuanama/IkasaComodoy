<?php
namespace App\Controllers;
use Libs\Controller;

class TestController extends Controller
{
        public function __construct()
        {
            $this->loadDirectoryTemplate('test');
        }
        public function index()
        {
            echo $this->template->render('index');
        }

        public function saludo($param=null)
        {
        if ($param==null) {
            $nombre= isset($_POST['nombre'])?$_POST['nombre']:'';
        }else{
            $nombre= isset($param[0])? $param[0]:'';
        }
        echo $this->template->render('saludo',['nombre'=>$nombre]);
        }

        public function suma($param=null)
        {
        $num1 = isset($_POST[0]) ? $_POST[0] : 0;
        $num2 = isset($_POST[1]) ? $_POST[1] : 0;
        $rpta = $num1 + $num2;

        echo $this->template->render('suma',[
            'num1'=>$num1,
            'num2'=>$num2,
            'rpta'=>$rpta,
            ]);
        }
        public function multi($param=null)
        {
        $num1 = isset($_POST[0]) ? $_POST[0] : 0;

        $num2 = isset($_POST[1]) ? $_POST[1] : 0;
    
        $rpta = $num1  * $num2;
        require_once '../app/views/test/multi.php';
        
        }
}