<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "welcome to homepage";
});

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

Route::get('posts/{post}/{category?}', function ($post, $category = null) {
    if($category == null){
        return "Estamos en el post {$post}";
    } else {
        return "Estamos en el post {$post} que cuenta con la categoría {$category}";
    }
});