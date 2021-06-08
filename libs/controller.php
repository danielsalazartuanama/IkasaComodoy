<?php
namespace Libs;

use Directory;
//padre de los controladores
class Controller 
{
    //parametros data
    protected $template;
    protected $dao;//protegida solo los hijos pueden acceder
    // public function renderView(string $view, $data = null){
    //     require_once '../app/views/' .$view . '.php';

    // }
    //se va encargar de ejecutar las dos instrucciones sirve para crear las instancias de plates
    public function loadDirectoryTemplate(string $directory){

        $this->template=new \League\Plates\Engine(MAINPATH .'app/views/'.$directory);
        $this->template->setFileExtension('php');
    }

    public function loadDAO(string $daoName){
        $classDAO="App\\Daos\\".$daoName."DAO";
        $this->dao=new $classDAO();
    }
}