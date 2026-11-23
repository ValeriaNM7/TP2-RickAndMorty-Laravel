
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Episodios - Rick and Morty</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <div class="contenedor">

        <h1>Episodios de Rick and Morty</h1>

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

        @foreach ($episodes as $episode)
            <div class="tarjeta">

                <h2>
                    <a href="{{ route('episodes.show', $episode->id) }}">
                        {{ $episode->episode }} - {{ $episode->name }}
                    </a>
                </h2>

                <p>Fecha de emisión: {{ $episode->air_date }}</p>

            </div>
        @endforeach

        {{ $episodes->links() }}

    </div>

</body>
</html>

