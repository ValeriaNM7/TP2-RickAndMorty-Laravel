# TP02 Rick & Morty App Laravel

Trabajo Practico N°2 de DAW

Aplicacion web hecha con Laravel que usa la base de datos del TP01 para consultar los personajes,
episodios y ubicaciones de Rick and Morty. Tiene un explorador publico, registro y login de usuarios
y listas personalizadas para los usuarios registrados.


## Parte 1: Explorador

Alumno: Valeria Moraschetti.

(Falta completar)


## Parte 2: Base de datos, registro y login

Alumno: Josefina Acevedo.

Archivos:

- database/migrations/2026_11_23_222338_create_user_lists_table.php: crea la tabla de listas.
- database/migrations/2026_11_23_222340_create_character_user_list_table.php: crea la tabla de personajes de cada lista.
- database/migrations/2026_11_23_222342_create_episode_user_list_table.php: crea la tabla de episodios de cada lista.
- app/Http/Controllers/AuthController.php: registro, login y logout.
- resources/views/auth/register.blade.php: formulario de registro.
- resources/views/auth/login.blade.php: formulario de login.
- routes/web.php: rutas de registro, login y logout (desde "REGISTRO Y LOGIN").
- Menu de las paginas: links de Ingresar, Registrarse y Salir (bloque `@auth`).
- .env.example: archivo de configuracion de ejemplo.

### Tablas

Se usa la base `rickandmorty` del TP01 sin cambiar sus tablas (characters, episodes, locations y
character_episode). Las tablas nuevas se crean con migraciones de Laravel:

- users: usuarios registrados (la trae Laravel).
- user_lists: listas de cada usuario (id, name, type, user_id).
- character_user_list: que personajes tiene cada lista (user_list_id, character_id).
- episode_user_list: que episodios tiene cada lista (user_list_id, episode_id).

Importante:

- type puede ser 'characters' o 'episodes', segun que guarda la lista.
- character_user_list y episode_user_list tienen clave primaria compuesta, asi no se puede repetir
  un personaje o episodio en la misma lista.
- Si se borra una lista se borran sus elementos, y si se borra un usuario se borran sus listas.
- La tabla se llama user_lists porque `list` es una palabra reservada de PHP.
- character_id y episode_id son `integer` porque los id del TP01 son INT.
- Las migraciones solo agregan tablas, asi que el importador del TP01 sigue funcionando.

### Registro y login

- Para registrarse se pide nombre, email y contraseña. Se valida que el email no este repetido y que
  la contraseña tenga al menos 8 caracteres.
- La contraseña se guarda encriptada con `Hash::make()`.
- El login se hace con `Auth::attempt()` y el logout con `Auth::logout()`.
- Las paginas de login y registro usan el middleware `guest` y el logout usa `auth`.
- El explorador sigue siendo publico, no hace falta iniciar sesion.


## Parte 3: Listas personalizadas

Alumno: Ignacio Oroño.

(Falta completar)


## Como usarlo

Requisitos: PHP 8.2 o mas nuevo (el de XAMPP sirve) con las extensiones `pdo_mysql` y `zip`
activadas, Composer y MySQL con la base `rickandmorty` del TP01 cargada.

1. Abrir una terminal en la carpeta del proyecto y ejecutar `composer install`.
2. Copiar `.env.example` y llamarlo `.env`.
3. En `.env`, poner la contraseña de MySQL de cada uno en `DB_PASSWORD`.
4. Ejecutar `php artisan key:generate`.
5. Ejecutar `php artisan migrate` para crear las tablas nuevas.
6. Ejecutar `php artisan serve`.
7. Entrar a http://localhost:8000
