<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Equipos</title>
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
    <h1>Gestión de Equipos</h1>

    <a href="{{ route('inicio') }}" class="volver">Inicio</a>
    <a href="{{ route('equipos.create') }}">Nuevo equipo</a>

    @if(session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
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
                        <a href="{{ route('equipos.edit', $equipo) }}">Editar</a>

                        <form action="{{ route('equipos.destroy', $equipo) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="eliminar" onclick="return confirm('¿Eliminar equipo?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>