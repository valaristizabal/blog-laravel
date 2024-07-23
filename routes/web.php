<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlantillaController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "mostrarVentanaPrincipal"]);

Route::get("/posts", [HomeController::class, "mostrarPostsGeneral"]);


//Route::get("/posts/{post}", [HomeController::class, "mostrarPostEspecificoTradicional"]);

//Route::get("/posts/{post}", [HomeController::class, "mostrarPostEspecificoCompact"]);
/*
Route::get("/posts/{post}/{category}", function($post, $category){
    return "Estamos en el post {$post} que cuenta con la categoría {$category}";
});*/

Route::get('posts/{post}/{category?}', [HomeController::class, "mostrarCategoriaExistente"]);

Route::get("/plantillas", [PlantillaController::class, "mostrarVentanaPrincipal"]);

Route::get("prueba", function(){

    /*CREAR POST

    $post = new Post;
    $post->tittle = "titulo de prueba 1";
    $post->content = "contenido de prueba 1";
    $post->categorie ="categoria de prueba 1";

    $post->save();

    return $post;*/

    /*BUSCAR POST

    $post = Post::find(1);
    $post = Post::where("tittle", "titulo de prueba 1")->first();
    return $post;
    */

    /*ACTUALIZAR POST

    $post = Post::find(1);
    $post->categorie = "categoría verdadera";
    $post-> save();
    return $post;
    */
    
    /*MOSTRAR VARIOS REGISTROS*/

    //TODOS LOS REGISTROS SIN FILTRO
    //$posts = Post::all();     
    //$posts = Post::get();

    //REGISTROS FILTRADOS
    //$posts =Post::where("id", ">=", "2")->get();

    //ORDENAR REGISTROS
    //$posts = Post::orderBy("id","desc")->get();
    
    //SELECCIONAR REGISTROS ESPECIFICOS
    $posts = Post::orderBy("id","desc")->select("id", "tittle", "categorie")->get();
    return $posts;
    
});