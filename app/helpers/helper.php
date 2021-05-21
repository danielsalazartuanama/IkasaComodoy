<?php
//ayudante myEcho($url) es una ayuda nativa de php
if (!function_exists('myEcho')) {
    # code...
function myEcho ($data){

    echo "<pre>",print_r($data), "</pre>";
 }

}

if (!function_exists('env')) {
    # code...
function env ($key,$default=null){

    //va buscar la clave que yo proporcione exista dentrodel archivo de configuracion
    if (array_key_exists($key, $_ENV)) {
        return $_ENV[$key];

    }else{
        return $default;
    }
 }

}
