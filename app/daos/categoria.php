<?php
namespace App\Daos;

use Libs\Connection;

class CategoriDAO{
    public function getAll()
    {
        $pdow = (new Connection())->getConnection();
        $sql = "SELECT id,nombre, descripcion FROM categoria";
        $stmt = $pdow->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(\PDO::FETCH_OBJ);
        return $data;
    }

}
