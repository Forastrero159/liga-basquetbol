@extends('layouts.app')

@section('titulo', 'Equipos | Liga de Básquetbol')

@section('contenido')
<div class="contenedor">
    <div class="encabezado">
        <div>
            <h1>🏆 Gestión de Equipos</h1>
            <p class="subtitulo">Administra los equipos participantes de la liga.</p>
        </div>

        <div class="acciones">
            <a href="{{ route('equipos.create') }}" class="btn btn-principal">+ Nuevo equipo</a>
        </div>
    </div>

    @if(session('success'))
        <div class="mensaje">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Equipo</th>
                <th>Ciudad</th>
                <th>Entrenador</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->id }}</td>
                    <td>{{ $equipo->nombre }}</td>
                    <td>{{ $equipo->ciudad }}</td>
                    <td>{{ $equipo->entrenador }}</td>
                    <td>
                        <a href="{{ route('equipos.edit', $equipo) }}" class="btn btn-editar">Editar</a>

                        <form action="{{ route('equipos.destroy', $equipo) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-eliminar" onclick="return confirm('¿Eliminar equipo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection