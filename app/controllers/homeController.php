<?php
namespace App\Controllers;
use Libs\Controller;

class HomeController extends Controller
{
    //constructor sirve para cargar el directorio de plantillas y acceder llamando a las vistas
    public function __construct()
    {
        $this->loadDirectoryTemplate('home');
    }
    public function index()
    {
        echo $this->template->render('index');
    }
    
}