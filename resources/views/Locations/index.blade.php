
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubicaciones - Rick and Morty</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <div class="contenedor">

        <h1>Ubicaciones de Rick and Morty</h1>

        <nav class="menu">
            <a href="{{ route('characters.index') }}">Personajes</a>
            <a href="{{ route('episodes.index') }}">Episodios</a>
            <a href="{{ route('locations.index') }}">Ubicaciones</a>
        </nav>

        @foreach ($locations as $location)
            <div class="tarjeta">

                <h2>
                    <a href="{{ route('locations.show', $location->id) }}">
                        {{ $location->name }}
                    </a>
                </h2>

                <p>Tipo: {{ $location->type }}</p>
                <p>Dimensión: {{ $location->dimension }}</p>

            </div>
        @endforeach

        {{ $locations->links() }}

    </div>

</body>
</html>

