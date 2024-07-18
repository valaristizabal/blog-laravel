<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function mostrarMensaje(){
        return "Bienvenido a la página principal del blog";
    }
}
