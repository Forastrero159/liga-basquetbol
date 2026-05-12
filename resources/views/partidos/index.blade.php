@extends('layouts.app')

@section('titulo', 'Partidos | Liga de Básquetbol')

@section('contenido')
<div class="contenedor">
    <div class="encabezado">
        <div>
            <h1>🔥 Gestión de Partidos</h1>
            <p class="subtitulo">Registra encuentros, marcadores, estados y resultados de la liga.</p>
        </div>

        <div class="acciones">
            <a href="{{ route('partidos.create') }}" class="btn btn-principal">+ Nuevo partido</a>
        </div>
    </div>

    @if(session('success'))
        <div class="mensaje">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Local</th>
                <th>Visitante</th>
                <th>Fecha</th>
                <th>Marcador</th>
                <th>Estado</th>
                <th>Resultado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partidos as $partido)
                <tr>
                    <td>{{ $partido->id }}</td>
                    <td>{{ $partido->equipoLocal->nombre ?? 'Sin equipo' }}</td>
                    <td>{{ $partido->equipoVisitante->nombre ?? 'Sin equipo' }}</td>
                    <td>{{ $partido->fecha }}</td>
                    <td>{{ $partido->puntos_local }} - {{ $partido->puntos_visitante }}</td>
                    <td>{{ $partido->estado }}</td>
                    <td>
                        @if($partido->puntos_local > $partido->puntos_visitante)
                            Gana {{ $partido->equipoLocal->nombre ?? '' }}
                        @elseif($partido->puntos_visitante > $partido->puntos_local)
                            Gana {{ $partido->equipoVisitante->nombre ?? '' }}
                        @else
                            Empate
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('partidos.edit', $partido) }}" class="btn btn-editar">Editar</a>

                        <form action="{{ route('partidos.destroy', $partido) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-eliminar" onclick="return confirm('¿Eliminar partido?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection