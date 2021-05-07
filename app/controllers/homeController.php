<?php
namespace App\Controllers;
use Libs\Controller;

class HomeController extends Controller
{
    public function index()
    {
        //traer toda la vista con el require_once
        // require_once '../app/views/home/index.php';
        $this->renderView('home/index');
    }
    
}