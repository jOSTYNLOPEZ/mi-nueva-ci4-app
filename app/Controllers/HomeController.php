<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // puedes pasar datos al view si quieres
        $data = [
            'title' => 'Hola mundo utilizando CodeIgniter4 Framework',
            'mensaje' => 'Este es un ejemplo sencillo usando el View Renderer'
        ];

        // renderiza app/Views/home.php
        return view('home', $data);
    }
}
