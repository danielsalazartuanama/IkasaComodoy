<?php
namespace App\Controllers;
use Libs\Controller;

class TestController extends Controller
{
    public function index()
    {
        // require_once '../app/views/test/index.php';
        $this->renderView('test/index');
    }



    public function saludo($param=null)
    {
        //paran sirve para coger los parameteros
        // echo is_null($param) ?'No ha especificado su nombre' : "Hola {$param[0]}";
        // echo isset($param) ? "Hola {$param[0]}" : 'No ha especificado su nombre';
       
     //asi recuperamos un dato con la variable superglobal post
        if ($param==null) {
            $nombre= isset($_POST['nombre'])?$_POST['nombre']:'';
        }else{
            $nombre= isset($param[0])? $param[0]:'';
        }
        // require_once '../app/views/test/saludo.php';

        //array asociativo
        $data=[
            'nombre'=>$nombre,
            'dato 2'=>'Juaneco',
            'dato 3'=>56


        ];
        $this->renderView('test/saludo',$data);

    }

    public function suma($param=null)
    {
        $num1 = isset($_POST[0]) ? $_POST[0] : 0;
        $num2 = isset($_POST[1]) ? $_POST[1] : 0;
        $rpta = $num1 + $num2;
        require_once '../app/views/test/suma.php';

        // echo "LA SUMA DE: {$num1} + {$num2} = {$rpta}";
       
    }
    public function multi($param=null)
    {

       
            $num1 = isset($_POST[0]) ? $_POST[0] : 0;
     
            $num2 = isset($_POST[1]) ? $_POST[1] : 0;
        
            $rpta = $num1  * $num2;
            require_once '../app/views/test/multi.php';
        //    echo "LA MULTI DE: {$num1} * {$num2} = {$rpta}";
       
    }
}