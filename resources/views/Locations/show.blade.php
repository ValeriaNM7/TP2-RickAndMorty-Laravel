
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $location->name }} - Rick and Morty</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <div class="contenedor">

        <h1>{{ $location->name }}</h1>

        <nav class="menu">
            <a href="{{ route('characters.index') }}">Personajes</a>
            <a href="{{ route('episodes.index') }}">Episodios</a>
            <a href="{{ route('locations.index') }}">Ubicaciones</a>
        </nav>

        <div class="detalle">

            <h2>Información de la ubicación</h2>

            <p>Tipo: {{ $location->type ?: 'Desconocido' }}</p>
            <p>Dimensión: {{ $location->dimension ?: 'Desconocida' }}</p>

            <h2>Personajes originarios de este lugar</h2>

            @forelse ($location->charactersFromHere as $character)
                <p>
                    <a href="{{ route('characters.show', $character->id) }}">
                        {{ $character->name }}
                    </a>
                </p>
            @empty
                <p>No hay personajes registrados.</p>
            @endforelse

            <h2>Personajes que viven actualmente aquí</h2>

            @forelse ($location->residents as $character)
                <p>
                    <a href="{{ route('characters.show', $character->id) }}">
                        {{ $character->name }}
                    </a>
                </p>
            @empty
                <p>No hay personajes registrados.</p>
            @endforelse

        </div>

        <a href="{{ route('locations.index') }}">Volver al listado de ubicaciones</a>

    </div>

</body>
</html>

