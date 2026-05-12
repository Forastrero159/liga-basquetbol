@extends('layouts.app')

@section('titulo', 'Nuevo Jugador | Liga de Básquetbol')

@section('contenido')
<div class="contenedor">
    <div class="encabezado">
        <div>
            <h1>🏀 Registrar Jugador</h1>
            <p class="subtitulo">Agrega un nuevo jugador y asígnalo a un equipo.</p>
        </div>
    </div>

    <form action="{{ route('jugadores.store') }}" method="POST" class="formulario">
        @csrf

        <label>Equipo:</label>
        <select name="equipo_id" required>
            <option value="">Seleccione un equipo</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>

        <label>Nombre del jugador:</label>
        <input type="text" name="nombre" required>

        <label>Posición:</label>
        <input type="text" name="posicion">

        <label>Número:</label>
        <input type="number" name="numero">

        <label>Edad:</label>
        <input type="number" name="edad">

        <button type="submit" class="btn btn-principal">Guardar jugador</button>
        <a href="{{ route('jugadores.index') }}" class="btn btn-secundario">Volver</a>
    </form>
</div>
@endsection