<?php

namespace Libs;

use Directory;
//padre de los controladores
class Controller
{
    protected $template;
    protected $dao;

    public function loadDirectoryTemplate(string $directory)
    {

        $this->template = new \League\Plates\Engine(MAINPATH . 'app/views/admin/' . $directory);
        $this->template->setFileExtension('php');
    }
    public function loadDAO(string $daoName)
    {
        $classDAO = "App\\Daos\\" . $daoName . "DAO";
        $this->dao = new $classDAO();
    }
}
