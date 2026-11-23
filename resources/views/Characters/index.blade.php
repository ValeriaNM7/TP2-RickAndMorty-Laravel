
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes - Rick and Morty</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <div class="contenedor">

        <h1>Personajes de Rick and Morty</h1>

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

        @foreach ($characters as $character)
            <div class="tarjeta">

                <h2>
                    <a href="{{ route('characters.show', $character->id) }}">
                        {{ $character->name }}
                    </a>
                </h2>

                <img src="{{ $character->image }}" alt="{{ $character->name }}" width="150">

                <p>Estado: {{ $character->status }}</p>
                <p>Especie: {{ $character->species }}</p>

            </div>
        @endforeach

        {{ $characters->links() }}

    </div>

</body>
</html>


