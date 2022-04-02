<?php

namespace coding\app\controllers;

class HomeController extends Controller
{
    public function home()
    {
        $this->view('home');
    }
    public function cart()
    {
        $this->view('cart');
    }
    public function details()
    {
        $this->view('details');
    }
    public function categories()
    {
        $this->view('categories');
    }
    public function checkout()
    {
        $this->view('checkout');
    }
}