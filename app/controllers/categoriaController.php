<?php

namespace App\Controllers;

use App\Daos\CategoriaDAO;
use App\Daos\CategoriDAO;
use Libs\Controller;

class CategoriaController extends Controller
{
    public function __construct()
    {
        $this->loadDirectoryTemplate('categoria');
    }
    public function index()
    {
        $data = (new CategoriaDAO())->getAll();
        echo $this->template->render('index', ['data' => $data]);
    }
}
