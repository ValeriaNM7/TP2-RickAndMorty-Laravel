
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return redirect()->route('characters.index');
});

// PERSONAJES

Route::get('/characters', [CharacterController::class, 'index'])
    ->name('characters.index');

Route::get('/characters/{id}', [CharacterController::class, 'show'])
    ->name('characters.show');

// EPISODIOS

Route::get('/episodes', [EpisodeController::class, 'index'])
    ->name('episodes.index');

Route::get('/episodes/{id}', [EpisodeController::class, 'show'])
    ->name('episodes.show');

// UBICACIONES

Route::get('/locations', [LocationController::class, 'index'])
    ->name('locations.index');

Route::get('/locations/{id}', [LocationController::class, 'show'])
    ->name('locations.show');


// REGISTRO Y LOGIN

// Solo para visitantes que no iniciaron sesión
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login']);
});

// Solo para usuarios logueados
Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
