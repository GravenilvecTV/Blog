<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->content }}</p>
    <p>{{ $article->views }} vues</p>

    <img width="200" src="{{ $article->thumbnail }}" alt="{{ $article->title }}">
    
    <a href="/articles">Retour au articles</a>
</body>
</html>