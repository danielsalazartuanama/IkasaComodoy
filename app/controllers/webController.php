<?php

namespace App\Controllers;


use Libs\Controller;

class WebController extends Controller
{
    //constructor sirve para cargar el directorio de plantillas y acceder llamando a las vistas
    public function __construct()
    {
        $this->loadDirectoryTemplate('web');
    }
    public function contact()
    {
        echo $this->template->render('contact');
    }
    public function cart()
    {
        echo $this->template->render('cart');
    }
    public function checkout()
    {
        echo $this->template->render('checkout');
    }
    public function compare()
    {
        echo $this->template->render('compare');
    }
    public function login()
    {
        echo $this->template->render('login');
    }
    public function product_details()
    {
        echo $this->template->render('product_details');
    }
    public function shop_left()
    {
        echo $this->template->render(
            'shop_left'
        );
    }
    public function shop_full()
    {
        echo $this->template->render('shop_full');
    }
}
