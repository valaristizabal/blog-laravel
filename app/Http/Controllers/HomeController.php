<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{

    public function mostrarMensaje(){
        return "Bienvenido a la página principal del blog";
    }

    public function mostrarCategoriaExistente($post, $category = null){
        if($category == null){
            return "Estamos en el post {$post}";
        } else {
            return "Estamos en el post {$post} que cuenta con la categoría {$category}";
        }
    }
}
