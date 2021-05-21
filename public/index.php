<?php
//los require once porque queremos cargar en memoria y este duisponible para todos los controladores y se habra 

use Dotenv\Dotenv;
use Libs\Core;
require_once '../vendor/autoload.php';
require_once '../config/config.php';
// echo realpath(__DIR__ . '/../');
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
// echo $_ENV['DB_DATABASE'];

$core=new Core();