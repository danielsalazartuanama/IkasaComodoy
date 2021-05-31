<?php

namespace App\Controllers;

use Libs\Controller;

class OperacionesController extends Controller
{
    public function  index()
    {
        echo "bienvenido";
    }

    public function suma(int $n1, int $n2)
    {
        return $n1 + $n2;
    }
}
$obj = new OperacionesController();
echo $obj->suma(5, 6);
