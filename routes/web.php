<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "mostrarMensaje"]);

Route::get("/posts", function(){
    return "Aquí encontrará todos los posts del blog";
});

/*
Route::get("/posts/{post}", function($post){
    return "Estamos en el post {$post}";
});

Route::get("/posts/{post}/{category}", function($post, $category){
    return "Estamos en el post {$post} que cuenta con la categoría {$category}";
});*/

Route::get('posts/{post}/{category?}', [HomeController::class, "mostrarCategoriaExistente"]);