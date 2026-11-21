
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $episode->name }} - Rick and Morty</title>
</head>
<body>

    <h1>{{ $episode->name }}</h1>

    <h2>Información del episodio</h2>

    <p>Código: {{ $episode->episode }}</p>
    <p>Fecha de emisión: {{ $episode->air_date }}</p>

    <h2>Personajes que aparecen en este episodio</h2>

    @foreach ($episode->characters as $character)
        <div>
            <a href="{{ route('characters.show', $character->id) }}">
                {{ $character->name }}
            </a>

            <br>

            <img src="{{ $character->image }}" alt="{{ $character->name }}" width="100">
        </div>
    @endforeach

    <a href="{{ route('episodes.index') }}">Volver al listado de episodios</a>

</body>
</html>
