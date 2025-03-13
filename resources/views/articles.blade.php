<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{ $nomBlog }}</h1>
    <p>Voici les {{ $nbArticles }} articles</p>

    @if($nbArticles == 0)
        <p>Il n'y aucun article</p>
    @else
        <article>Article 1</article>
        <article>Article 2</article>
        <article>Article 3</article>
    @endif

    <a href="/">Retour</a>
</body>
</html>