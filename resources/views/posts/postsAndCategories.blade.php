<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel 11 | posts & categories</title>
</head>
<body>
    <h1>Posts y categorías</h1>
    <p>Nos encontramos en el post {{$post}}</p>

    @if ($category)
        <p>de la categoría {{$category}}</p>   
    @endif
</body>
</html>