@extends('layouts.app')

@section('titulo', 'Nuevo Equipo | Liga de Básquetbol')

@section('contenido')
<div class="contenedor">
    <div class="encabezado">
        <div>
            <h1>🏀 Registrar Equipo</h1>
            <p class="subtitulo">Agrega un nuevo equipo participante de la liga.</p>
        </div>
    </div>

    <form action="{{ route('equipos.store') }}" method="POST" class="formulario">
        @csrf

        <label>Nombre del equipo:</label>
        <input type="text" name="nombre" required>

        <label>Ciudad:</label>
        <input type="text" name="ciudad">

        <label>Entrenador:</label>
        <input type="text" name="entrenador">

        <button type="submit" class="btn btn-principal">Guardar equipo</button>
        <a href="{{ route('equipos.index') }}" class="btn btn-secundario">Volver</a>
    </form>
</div>
@endsection