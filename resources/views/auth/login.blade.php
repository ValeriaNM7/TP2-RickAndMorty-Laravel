<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingresar - Rick and Morty</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <div class="contenedor">

        <h1>Ingresar</h1>

        <nav class="menu">
            <a href="{{ route('characters.index') }}">Personajes</a>
            <a href="{{ route('episodes.index') }}">Episodios</a>
            <a href="{{ route('locations.index') }}">Ubicaciones</a>
        </nav>

        <div class="detalle">

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <p>
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" value="{{ old('email') }}">
                    @error('email')
                        <br>{{ $message }}
                    @enderror
                </p>

                <p>
                    <label for="password">Contraseña</label><br>
                    <input type="password" id="password" name="password">
                    @error('password')
                        <br>{{ $message }}
                    @enderror
                </p>

                <button type="submit">Ingresar</button>
            </form>

            <p>¿No tenés cuenta? <a href="{{ route('register') }}">Registrate</a></p>

        </div>

    </div>

</body>
</html>
