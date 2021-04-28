<?php

class Controller
{
    public function renderView(string $view, $data = null){
        // require_once '../app/views/test/index.php';
        require_once '../app/views/' .$view . '.php';

    }
}