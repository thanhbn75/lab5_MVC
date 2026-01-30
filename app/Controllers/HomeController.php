<?php
namespace App\Controllers;

class HomeController
{
    public function index()
    {
        $message = "Chào mừng đến với MVC!";
        include "views/home.php";
    }
}
