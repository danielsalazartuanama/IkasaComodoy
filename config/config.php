<?php
//constante la variable url va tener toda la direccion del dominio
define('URL', 'http://htgventas.test/');
define('ROOT', $_SERVER['DOCUMENT_ROOT']);
// define('MAINPATH',$_SERVER['DOCUMENT_ROOT']);

define('MAINPATH', str_replace('public', '', ROOT));

define('GRANDE', 'modal-xl');
define('NORMAL', 'modal-lg');
define('PEQUEÑO', '');
define('MINI', 'modal-sm');
