<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - Rick and Morty</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>

    <div class="contenedor">

        <h1>Crear una cuenta</h1>

        <nav class="menu">
            <a href="{{ route('characters.index') }}">Personajes</a>
            <a href="{{ route('episodes.index') }}">Episodios</a>
            <a href="{{ route('locations.index') }}">Ubicaciones</a>
        </nav>

        <div class="detalle">

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <p>
                    <label for="name">Nombre</label><br>
                    <input type="text" id="name" name="name" value="{{ old('name') }}">
                    @error('name')
                        <br>{{ $message }}
                    @enderror
                </p>

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

                <p>
                    <label for="password_confirmation">Repetir contraseña</label><br>
                    <input type="password" id="password_confirmation" name="password_confirmation">
                </p>

                <button type="submit">Registrarme</button>
            </form>

            <p>¿Ya tenés cuenta? <a href="{{ route('login') }}">Ingresá</a></p>

        </div>

    </div>

</body>
</html>
