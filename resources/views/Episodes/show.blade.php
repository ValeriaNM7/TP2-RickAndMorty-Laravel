
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $episode->name }} - Rick and Morty</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <div class="contenedor">

        <h1>{{ $episode->name }}</h1>

        <nav class="menu">
            <a href="{{ route('characters.index') }}">Personajes</a>
            <a href="{{ route('episodes.index') }}">Episodios</a>
            <a href="{{ route('locations.index') }}">Ubicaciones</a>
        </nav>

        <div class="detalle">

            <h2>Información del episodio</h2>

            <p>Código: {{ $episode->episode }}</p>
            <p>Fecha de emisión: {{ $episode->air_date }}</p>

            <h2>Personajes que aparecen en este episodio</h2>

            @foreach ($episode->characters as $character)
                <div class="tarjeta">

                    <a href="{{ route('characters.show', $character->id) }}">
                        {{ $character->name }}
                    </a>

                    <img src="{{ $character->image }}" alt="{{ $character->name }}" width="100">

                </div>
            @endforeach

        </div>

        <a href="{{ route('episodes.index') }}">Volver al listado de episodios</a>

    </div>

</body>
</html>

