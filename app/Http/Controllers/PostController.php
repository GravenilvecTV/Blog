<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function add_article() {
        return view('add');
    }

    public function send_form(Request $request) {
        // dd($request->all());
    
        // verifier si le formulaire est valide
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required'
        ]);
    
        if ($validator->fails()) {
            // rediriger vers la page du form
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // inserer un nouvel article dans la base
        Post::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        return 'Article envoyé avec succès';
    }

    public function show_one_article(string $id) {
        $article = Post::find($id);
        return view('article', ['article' => $article]);
    }

    public function show_articles() {
        $articles = Post::all();
        $nbArticles = count($articles);
        $context = [
            'articles' => $articles,
            'nbArticles' => $nbArticles, 
            'nomBlog' => 'Blogito'
        ];
        return view('articles', $context);
    }
    
}
