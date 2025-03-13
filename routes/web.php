<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/article/{id}', function (string $id) {
    $article = Post::find($id);
    return view('article', ['article' => $article]);
});

Route::get('/articles', function () {
    $articles = Post::all();
    $nbArticles = count($articles);
    $context = [
        'articles' => $articles,
        'nbArticles' => $nbArticles, 
        'nomBlog' => 'Blogito'
    ];
    return view('articles', $context);
});
