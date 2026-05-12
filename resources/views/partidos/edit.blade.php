<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Partido</title>
    <style>
        body { font-family: Arial; background: #f3f4f6; }
        .contenedor { width: 50%; margin: 40px auto; background: white; padding: 25px; border-radius: 10px; }
        input, select { width: 100%; padding: 10px; margin: 8px 0; }
        button, a { padding: 10px 14px; background: #2563eb; color: white; border: none; border-radius: 5px; text-decoration: none; }
    </style>
</head>
<body>
<div class="contenedor">
    <h1>Editar Partido</h1>

    <form action="{{ route('partidos.update', $partido) }}" method="POST">
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

        <button type="submit">Actualizar</button>
        <a href="{{ route('partidos.index') }}">Volver</a>
    </form>
</div>
</body>
</html>