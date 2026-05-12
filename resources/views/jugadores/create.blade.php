<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Jugador</title>
    <style>
        body { font-family: Arial; background: #f3f4f6; }
        .contenedor { width: 50%; margin: 40px auto; background: white; padding: 25px; border-radius: 10px; }
        input, select { width: 100%; padding: 10px; margin: 8px 0; }
        button, a { padding: 10px 14px; background: #2563eb; color: white; border: none; border-radius: 5px; text-decoration: none; }
    </style>
</head>
<body>
<div class="contenedor">
    <h1>Registrar Jugador</h1>

    <form action="{{ route('jugadores.store') }}" method="POST">
        @csrf

        <label>Equipo:</label>
        <select name="equipo_id" required>
            <option value="">Seleccione un equipo</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Posición:</label>
        <input type="text" name="posicion">

        <label>Número:</label>
        <input type="number" name="numero">

        <label>Edad:</label>
        <input type="number" name="edad">

        <button type="submit">Guardar</button>
        <a href="{{ route('jugadores.index') }}">Volver</a>
    </form>
</div>
</body>
</html>