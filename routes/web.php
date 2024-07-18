<?php

use App\Http\Controllers\HomeController;
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