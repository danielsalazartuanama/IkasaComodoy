<?php
namespace App\Daos;

use Libs\Connection;

class MarcaDAO 
{
    public function getAll(){

        $pdo= Connection::getInstance()->getConnection();
    }
}
