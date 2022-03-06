<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Film</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-3">
            @foreach ($ls_film as $chiave => $film)
                <div class="col-3 g-3 m-2 carte">
                    <p>Titolo: <span>{{$film['title']}}</span></p>
                    <p>Titolo originale: <span>{{$film['original_title']}}</span></p>
                    <p>Voto: <span>{{$film['vote']}}</span></p>
                </div>
             @endforeach
        </div>
    </div>
    
</body>
</html>
