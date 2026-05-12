<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Partido</title>
    <style>
        body { font-family: Arial; background: #f3f4f6; }
        .contenedor { width: 50%; margin: 40px auto; background: white; padding: 25px; border-radius: 10px; }
        input, select { width: 100%; padding: 10px; margin: 8px 0; }
        button, a { padding: 10px 14px; background: #2563eb; color: white; border: none; border-radius: 5px; text-decoration: none; }
    </style>
</head>
<body>
<div class="contenedor">
    <h1>Registrar Partido</h1>

    <form action="{{ route('partidos.store') }}" method="POST">
        @csrf

        <label>Equipo local:</label>
        <select name="equipo_local_id" required>
            <option value="">Seleccione equipo local</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>

        <label>Equipo visitante:</label>
        <select name="equipo_visitante_id" required>
            <option value="">Seleccione equipo visitante</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>

        <label>Fecha:</label>
        <input type="date" name="fecha" required>

        <label>Puntos local:</label>
        <input type="number" name="puntos_local" value="0" required>

        <label>Puntos visitante:</label>
        <input type="number" name="puntos_visitante" value="0" required>

        <label>Estado:</label>
        <select name="estado" required>
            <option value="Programado">Programado</option>
            <option value="Finalizado">Finalizado</option>
            <option value="Suspendido">Suspendido</option>
        </select>

        <button type="submit">Guardar</button>
        <a href="{{ route('partidos.index') }}">Volver</a>
    </form>
</div>
</body>
</html>