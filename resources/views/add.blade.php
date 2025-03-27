<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'article</title>
</head>
<body>
    <form method="post" action="/form">
        @csrf
        <input type="text" placeholder="Titre de l'article" name="title">
        <textarea name="content" id="">Contenu de l'article...</textarea>
        <input type="submit" value="Ajouter">
    </form>

    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</body>
</html>