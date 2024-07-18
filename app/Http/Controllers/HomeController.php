<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller{


    public function mostrarVentanaPrincipal(){
        return view("home");
    }

    public function mostrarPostsGeneral(){
        return view("posts.index");
    }

    public function mostrarPostEspecificoTradicional($post){
        return view("posts.postsEspecificos", [
            "post" => $post
        ]);
    }

    public function mostrarPostEspecificoCompact($post){
        return view("posts.postsEspecificos", compact("post"));
    }

    public function mostrarCategoriaExistente($post, $category = null){
            return view("posts.postsAndCategories",compact("post", "category"));
        }
}
