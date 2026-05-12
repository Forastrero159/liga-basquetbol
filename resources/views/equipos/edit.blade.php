@extends('layouts.app')

@section('titulo', 'Editar Equipo | Liga de Básquetbol')

@section('contenido')
<div class="contenedor">
    <div class="encabezado">
        <div>
            <h1>✏️ Editar Equipo</h1>
            <p class="subtitulo">Actualiza los datos del equipo seleccionado.</p>
        </div>
    </div>

    <form action="{{ route('equipos.update', $equipo) }}" method="POST" class="formulario">
        @csrf
        @method('PUT')

        <label>Nombre del equipo:</label>
        <input type="text" name="nombre" value="{{ $equipo->nombre }}" required>

        <label>Ciudad:</label>
        <input type="text" name="ciudad" value="{{ $equipo->ciudad }}">

        <label>Entrenador:</label>
        <input type="text" name="entrenador" value="{{ $equipo->entrenador }}">

        <button type="submit" class="btn btn-principal">Actualizar equipo</button>
        <a href="{{ route('equipos.index') }}" class="btn btn-secundario">Volver</a>
    </form>
</div>
@endsection