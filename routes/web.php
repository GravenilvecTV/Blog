<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {
    $articles = ["Article 1", "Article 2", "Article 3", "Article 4"];
    $nbArticles = 3;
    $context = [
        'nbArticles' => $nbArticles, 
        'nomBlog' => 'Blogito'
    ];
    return view('articles', $context);
});
