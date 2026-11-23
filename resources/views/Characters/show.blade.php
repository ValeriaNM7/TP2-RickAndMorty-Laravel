
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $character->name }} - Rick and Morty</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <div class="contenedor">

        <h1>{{ $character->name }}</h1>

        <nav class="menu">
            <a href="{{ route('characters.index') }}">Personajes</a>
            <a href="{{ route('episodes.index') }}">Episodios</a>
            <a href="{{ route('locations.index') }}">Ubicaciones</a>

            @auth
                <span>Hola, {{ Auth::user()->name }}</span>
                <form action="{{ route('logout') }}" method="POST" style="display:inline">
                    @csrf
                    <button type="submit">Salir</button>
                </form>
            @else
                <a href="{{ route('login') }}">Ingresar</a>
                <a href="{{ route('register') }}">Registrarse</a>
            @endauth
        </nav>

        <div class="detalle">

            <img src="{{ $character->image }}" alt="{{ $character->name }}" width="200">

            <h2>Información del personaje</h2>

            <p>Estado: {{ $character->status }}</p>
            <p>Especie: {{ $character->species }}</p>
            <p>Tipo: {{ $character->type ?: 'Desconocido' }}</p>
            <p>Género: {{ $character->gender }}</p>

            <h2>Origen</h2>

            @if ($character->origin)
                <p>
                    <a href="{{ route('locations.show', $character->origin->id) }}">
                        {{ $character->origin->name }}
                    </a>
                </p>
            @else
                <p>Desconocido</p>
            @endif

            <h2>Ubicación actual</h2>

            @if ($character->location)
                <p>
                    <a href="{{ route('locations.show', $character->location->id) }}">
                        {{ $character->location->name }}
                    </a>
                </p>
            @else
                <p>Desconocida</p>
            @endif

            <h2>Episodios</h2>

            @foreach ($character->episodes as $episode)
                <p>
                    <a href="{{ route('episodes.show', $episode->id) }}">
                        {{ $episode->episode }} - {{ $episode->name }}
                    </a>
                </p>
            @endforeach

        </div>

        <a href="{{ route('characters.index') }}">Volver al listado de personajes</a>

    </div>

</body>
</html>
