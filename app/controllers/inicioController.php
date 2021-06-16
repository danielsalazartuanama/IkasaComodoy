<?php
namespace App\Controllers;
use Libs\Controller;

class InicioController extends Controller
{
    //constructor sirve para cargar el directorio de plantillas y acceder llamando a las vistas
    public function __construct()
    {
        $this->loadDirectoryTemplate('inicio');
    }
    public function index()
    {
        echo $this->template->render('index');
    }
    
}