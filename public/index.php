<?php
//los require once porque queremos cargar en memoria y este duisponible para todos los controladores y se habra 

use Libs\Core;
use Dotenv\Dotenv;

require_once '../vendor/autoload.php';
require_once '../config/config.php';
//echo realpath(__DIR__ . '/../');
//echo MAINPATH;
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
$core = new Core();
