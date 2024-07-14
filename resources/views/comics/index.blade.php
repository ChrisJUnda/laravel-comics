<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Elenco Fumetti</title>
</head>

<body>
    <h1>
        Fumetti
    </h1>
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-4">
                    <p>Titolo: {{ $comic->title }}</p>
                    <p>Descrizione: {{ $comic->description }}</p>
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"></img>
                    <p>Prezzo: {{ $comic->price }}</p>
                    <p>Serie: {{ $comic->series }}</p>
                    <p>Data uscita: {{ $comic->sale_date }}</p>
                    <p>Tipo: {{ $comic->type }}</p>
                    <p>Artista: {{ $comic->artists }}</p>
                    <p>Scrittore: {{ $comic->writers }}</p>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
