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
    public function sidebar()
    {
        echo $this->template->render('contact');
    }
    public function product_details()
    {
        echo $this->template->render('product_details');
    }
    public function shop_right()
    {
        echo $this->template->render('shop_right');
    }
    public function shop_full()
    {
        echo $this->template->render('shop_full');
    }
}
