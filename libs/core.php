<?php
namespace Libs;

use App\Controllers\HomeController;

class Core
{
    public function __construct()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : null;

        //quitamos el último /
        $url = rtrim($url, '/');

        //Convertir en arrau los elementos se la URL (petición)
        $url = explode('/', $url);

        // require_once '../app/helpers/helper.php';
        myEcho($url);
        // echo "<pre>", print_r($url), "</pre>";
    
        //Si el usuario no proporciona un controlador
        if (empty($url[0])) {

            //Llamamos al controlador predeterminado
            require_once '../app/controllers/homeController.php';
            (new \App\Controllers\HomeController())->index();
            return false;
        }

        //Cuando el usuario especifique un controlador
        //Forma la ruta de ese controlador
        $path_controller = '../app/controllers/' . $url[0] . 'controller.php';

        //Verifique si el controlador espesificado existe
        if (file_exists($path_controller)) {

            //Creamos una instancia de dicho controlador
            require_once $path_controller;
            $controller_name = '\\App\\Controllers\\'. $url[0] . 'Controller';
            $controller = new $controller_name();
            // echo "El cantrolador  {$url[0]} existe";

            $size = count($url);

            //Si la cantidad de elementos del array es >= 2
            //entonces se ha especificado un controlador y una acción
            if ($size >= 2) {
                //Verificamos que la acción esperamos por el usuario exista
                if (method_exists($controller, $url[1])) {
                    //Verificar si existen parámetros
                    if ($size >= 3) {
                        //Al menos el usuario a especifucado un parámetro

                        //Capturamos los parámetros ingrasados en un array "param"
                        $param = [];
                        for ($i = 2; $i < $size; $i++) {
                            array_push($param, $url[$i]);
                        }

                        //Llamamos al controlador, su acción y le especificamos los parámetros
                        $controller->{$url[1]}($param);
                        // echo "<pre>", print_r($param), "</pre>";
                    } else {
                        //El usuario no ha especificado parámetros entonces
                        //llamamos a la acción sin parámetros
                        $controller->{$url[1]}();
                    }
                } else {
                    echo "El metodo de acción {$url[1]} no existe";
                }
            } else {
                //Cuando el usuario no especificó ninguna acción llamamos
                //demanera predetermenada a la acción index
                $controller->index();
            }
        } else {
            echo "El controlador {$url[0]} no existe";
        }
    }
}
