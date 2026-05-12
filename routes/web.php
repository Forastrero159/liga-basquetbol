<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\JugadorController;
use App\Http\Controllers\PartidoController;
use App\Models\Equipo;
use App\Models\Jugador;
use App\Models\Partido;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::resource('equipos', EquipoController::class);
Route::resource('jugadores', JugadorController::class);
Route::resource('partidos', PartidoController::class);

Route::get('/estadisticas', function () {
    $totalEquipos = Equipo::count();
    $totalJugadores = Jugador::count();
    $totalPartidos = Partido::count();
    $partidosFinalizados = Partido::where('estado', 'Finalizado')->count();

    return view('estadisticas', compact(
        'totalEquipos',
        'totalJugadores',
        'totalPartidos',
        'partidosFinalizados'
    ));
})->name('estadisticas');