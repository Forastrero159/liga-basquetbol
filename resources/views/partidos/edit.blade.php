@extends('layouts.app')

@section('titulo', 'Editar Partido | Liga de Básquetbol')

@section('contenido')
<div class="contenedor">
    <div class="encabezado">
        <div>
            <h1>✏️ Editar Partido</h1>
            <p class="subtitulo">Actualiza equipos, marcador, fecha o estado del encuentro.</p>
        </div>
    </div>

    <form action="{{ route('partidos.update', $partido) }}" method="POST" class="formulario">
        @csrf
        @method('PUT')

        <label>Equipo local:</label>
        <select name="equipo_local_id" required>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}" {{ $partido->equipo_local_id == $equipo->id ? 'selected' : '' }}>
                    {{ $equipo->nombre }}
                </option>
            @endforeach
        </select>

        <label>Equipo visitante:</label>
        <select name="equipo_visitante_id" required>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}" {{ $partido->equipo_visitante_id == $equipo->id ? 'selected' : '' }}>
                    {{ $equipo->nombre }}
                </option>
            @endforeach
        </select>

        <label>Fecha:</label>
        <input type="date" name="fecha" value="{{ $partido->fecha }}" required>

        <label>Puntos local:</label>
        <input type="number" name="puntos_local" value="{{ $partido->puntos_local }}" required>

        <label>Puntos visitante:</label>
        <input type="number" name="puntos_visitante" value="{{ $partido->puntos_visitante }}" required>

        <label>Estado:</label>
        <select name="estado" required>
            <option value="Programado" {{ $partido->estado == 'Programado' ? 'selected' : '' }}>Programado</option>
            <option value="Finalizado" {{ $partido->estado == 'Finalizado' ? 'selected' : '' }}>Finalizado</option>
            <option value="Suspendido" {{ $partido->estado == 'Suspendido' ? 'selected' : '' }}>Suspendido</option>
        </select>

        <button type="submit" class="btn btn-principal">Actualizar partido</button>
        <a href="{{ route('partidos.index') }}" class="btn btn-secundario">Volver</a>
    </form>
</div>
@endsection