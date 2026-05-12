<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Partidos</title>
    <style>
        body { font-family: Arial; background: #f3f4f6; }
        .contenedor { width: 90%; margin: 30px auto; background: white; padding: 25px; border-radius: 10px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background: #1f2937; color: white; }
        a, button { padding: 8px 12px; background: #2563eb; color: white; border: none; border-radius: 5px; text-decoration: none; cursor: pointer; }
        .eliminar { background: #dc2626; }
        .volver { background: #374151; }
    </style>
</head>
<body>
<div class="contenedor">
    <h1>Gestión de Partidos</h1>

    <a href="{{ route('inicio') }}" class="volver">Inicio</a>
    <a href="{{ route('partidos.create') }}">Nuevo partido</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Equipo Local</th>
                <th>Equipo Visitante</th>
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
                        <a href="{{ route('partidos.edit', $partido) }}">Editar</a>

                        <form action="{{ route('partidos.destroy', $partido) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="eliminar" onclick="return confirm('¿Eliminar partido?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>