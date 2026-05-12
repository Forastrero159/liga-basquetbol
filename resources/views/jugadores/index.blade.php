@extends('layouts.app')

@section('titulo', 'Jugadores | Liga de Básquetbol')

@section('contenido')
<div class="contenedor">
    <div class="encabezado">
        <div>
            <h1>⛹️ Gestión de Jugadores</h1>
            <p class="subtitulo">Administra los jugadores registrados y su equipo correspondiente.</p>
        </div>

        <div class="acciones">
            <a href="{{ route('jugadores.create') }}" class="btn btn-principal">+ Nuevo jugador</a>
        </div>
    </div>

    @if(session('success'))
        <div class="mensaje">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Jugador</th>
                <th>Equipo</th>
                <th>Posición</th>
                <th>Número</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jugadores as $jugador)
                <tr>
                    <td>{{ $jugador->id }}</td>
                    <td>{{ $jugador->nombre }}</td>
                    <td>{{ $jugador->equipo->nombre ?? 'Sin equipo' }}</td>
                    <td>{{ $jugador->posicion }}</td>
                    <td>{{ $jugador->numero }}</td>
                    <td>{{ $jugador->edad }}</td>
                    <td>
                        <a href="{{ route('jugadores.edit', $jugador) }}" class="btn btn-editar">Editar</a>

                        <form action="{{ route('jugadores.destroy', $jugador) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-eliminar" onclick="return confirm('¿Eliminar jugador?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection