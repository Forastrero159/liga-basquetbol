@extends('layouts.app')

@section('titulo', 'Nuevo Partido | Liga de Básquetbol')

@section('contenido')
<div class="contenedor">
    <div class="encabezado">
        <div>
            <h1>🏀 Registrar Partido</h1>
            <p class="subtitulo">Programa o registra un encuentro entre dos equipos.</p>
        </div>
    </div>

    <form action="{{ route('partidos.store') }}" method="POST" class="formulario">
        @csrf

        <label>Equipo local:</label>
        <select name="equipo_local_id" required>
            <option value="">Seleccione equipo local</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>

        <label>Equipo visitante:</label>
        <select name="equipo_visitante_id" required>
            <option value="">Seleccione equipo visitante</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>

        <label>Fecha:</label>
        <input type="date" name="fecha" required>

        <label>Puntos local:</label>
        <input type="number" name="puntos_local" value="0" required>

        <label>Puntos visitante:</label>
        <input type="number" name="puntos_visitante" value="0" required>

        <label>Estado:</label>
        <select name="estado" required>
            <option value="Programado">Programado</option>
            <option value="Finalizado">Finalizado</option>
            <option value="Suspendido">Suspendido</option>
        </select>

        <button type="submit" class="btn btn-principal">Guardar partido</button>
        <a href="{{ route('partidos.index') }}" class="btn btn-secundario">Volver</a>
    </form>
</div>
@endsection