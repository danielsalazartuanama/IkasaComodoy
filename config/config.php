<?php
//constante la variable url va tener toda la direccion del dominio
define('URL', 'http://ikasacomodoy.test/');
define('ROOT',$_SERVER['DOCUMENT_ROOT']);
// define('MAINPATH',$_SERVER['DOCUMENT_ROOT']);

define('MAINPATH', str_replace('public', '',ROOT));
