<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
    $nbArticles = 3;
    $context = [
        'nbArticles' => $nbArticles, 
        'nomBlog' => 'Blogito'
    ];
    return view('articles', $context);
});
