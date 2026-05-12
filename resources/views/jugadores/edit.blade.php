@extends('layouts.app')

@section('titulo', 'Editar Jugador | Liga de Básquetbol')

@section('contenido')
<div class="contenedor">
    <div class="encabezado">
        <div>
            <h1>✏️ Editar Jugador</h1>
            <p class="subtitulo">Actualiza la información del jugador seleccionado.</p>
        </div>
    </div>

    <form action="{{ route('jugadores.update', $jugador) }}" method="POST" class="formulario">
        @csrf
        @method('PUT')

        <label>Equipo:</label>
        <select name="equipo_id" required>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}" {{ $jugador->equipo_id == $equipo->id ? 'selected' : '' }}>
                    {{ $equipo->nombre }}
                </option>
            @endforeach
        </select>

        <label>Nombre del jugador:</label>
        <input type="text" name="nombre" value="{{ $jugador->nombre }}" required>

        <label>Posición:</label>
        <input type="text" name="posicion" value="{{ $jugador->posicion }}">

        <label>Número:</label>
        <input type="number" name="numero" value="{{ $jugador->numero }}">

        <label>Edad:</label>
        <input type="number" name="edad" value="{{ $jugador->edad }}">

        <button type="submit" class="btn btn-principal">Actualizar jugador</button>
        <a href="{{ route('jugadores.index') }}" class="btn btn-secundario">Volver</a>
    </form>
</div>
@endsection