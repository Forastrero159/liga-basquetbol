@extends('layouts.app')

@section('titulo', 'Estadísticas | Liga de Básquetbol')

@section('contenido')
<div class="contenedor" style="text-align:center;">
    <div class="encabezado" style="justify-content:center;">
        <div>
            <h1>📊 Estadísticas de la Liga</h1>
            <p class="subtitulo">Resumen general de equipos, jugadores, partidos registrados y partidos finalizados.</p>
        </div>
    </div>

    <div>
        <div class="tarjeta">
            <div class="numero">{{ $totalEquipos }}</div>
            <p>Equipos registrados</p>
        </div>

        <div class="tarjeta">
            <div class="numero">{{ $totalJugadores }}</div>
            <p>Jugadores registrados</p>
        </div>

        <div class="tarjeta">
            <div class="numero">{{ $totalPartidos }}</div>
            <p>Partidos registrados</p>
        </div>

        <div class="tarjeta">
            <div class="numero">{{ $partidosFinalizados }}</div>
            <p>Partidos finalizados</p>
        </div>
    </div>

    <br>

    <a href="{{ route('inicio') }}" class="btn btn-secundario">Volver al inicio</a>
</div>
@endsection