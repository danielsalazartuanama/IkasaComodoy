<?php

namespace App\Controllers;

use Libs\Controller;

class HomeController extends Controller
{
    //constructor sirve para cargar el directorio de plantillas y acceder llamando a las vistas
    public function __construct()
    {
        $this->loadDirectoryTemplate('home');
    }
    public function index()
    {
        echo $this->template->render('index');
    }
    public function abaut()
    {
        echo $this->template->render('abaut');
    }
    public function cart()
    {
        echo $this->template->render('cart');
    }
    public function checkout()
    {
        echo $this->template->render('checkout');
    }
    public function contact()
    {
        echo $this->template->render('contact');
    }
    public function myaccount()
    {
        echo $this->template->render('myaccount');
    }
    public function service()
    {
        echo $this->template->render('service');
    }
    public function shop()
    {
        echo $this->template->render('shop');
    }
    public function shopdetails()
    {
        echo $this->template->render('shopdetails');
    }
    public function wishlist()
    {
        echo $this->template->render('wishlist');
    }
}
