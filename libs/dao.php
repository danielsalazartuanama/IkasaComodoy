<?php

namespace Libs;
class Dao
{
    protected $pdo;

    public function loadConnection()
    {
        //$this->pdo = Connection::getInstance()->getConnection();
        $this->pdo = (new Connection())->getInstance()->getConnection();
        //(new Connection())->getConnection();
    }
}
