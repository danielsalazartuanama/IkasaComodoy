<?php
namespace Libs;
use \Illuminate\Database\Capsule\Manager as Capsule;
class Database{

    public function __construct()
    {
        $capsule = new Capsule();
        
        $capsule->addConnection([
        'driver'=>env('DB_CONNECTION','mysql'),
        'host'=>env('DB_HOST'),
        'database'=>env('DB_DATABASE'),
        'username'=>env('DB_USERNAME'),
        'password'=>env('DB_PASSWORD'),
        'charset'=>env('DB_CHARSET'),
        'prefix'=>env('uft8_unicode_ci'),


        ]);
        
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }
}
