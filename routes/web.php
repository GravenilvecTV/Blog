<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// recuperer la page pour ecrire un nouvel article (get)
Route::get('/add', [PostController::class, 'add_article']);

// envoyer les données du formulaire au site (post)
Route::post('/form', [PostController::class, 'send_form']);

Route::get('/article/{id}', [PostController::class, 'show_one_article']);

Route::get('/articles', [PostController::class, 'show_articles']);
