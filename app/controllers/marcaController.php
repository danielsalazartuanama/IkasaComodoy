<?php
namespace App\Controllers;

use App\Daos\MarcaDAO;
use Libs\Controller;

class MarcaController extends Controller{


    public function __construct()
    {
        $this->loadDirectoryTemplate('marca');
    }

    public function index()
    {
        $data=(new MarcaDAO())->getAll();
        echo $this->template->render('index',['data'=>$data]);
    }

}