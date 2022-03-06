<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($ls_film as $chiave => $film)
            <div>
                <h4>Titolo : {{$film['title']}}</h4>
                <p>Titolo originale : {{$film['original_title']}}</p>
            </div>
    @endforeach
</body>
</html>
