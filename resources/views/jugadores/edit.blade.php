<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Jugador</title>
    <style>
        body { font-family: Arial; background: #f3f4f6; }
        .contenedor { width: 50%; margin: 40px auto; background: white; padding: 25px; border-radius: 10px; }
        input, select { width: 100%; padding: 10px; margin: 8px 0; }
        button, a { padding: 10px 14px; background: #2563eb; color: white; border: none; border-radius: 5px; text-decoration: none; }
    </style>
</head>
<body>
<div class="contenedor">
    <h1>Editar Jugador</h1>

    <form action="{{ route('jugadores.update', $jugador) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Equipo:</label>
        <select name="equipo_id" required>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}" {{ $jugador->equipo_id == $equipo->id ? 'selected' : '' }}>
                    {{ $equipo->nombre }}
                </option>
            @endforeach
        </select>

        <label>Nombre:</label>
        <input type="text" name="nombre" value="{{ $jugador->nombre }}" required>

        <label>Posición:</label>
        <input type="text" name="posicion" value="{{ $jugador->posicion }}">

        <label>Número:</label>
        <input type="number" name="numero" value="{{ $jugador->numero }}">

        <label>Edad:</label>
        <input type="number" name="edad" value="{{ $jugador->edad }}">

        <button type="submit">Actualizar</button>
        <a href="{{ route('jugadores.index') }}">Volver</a>
    </form>
</div>
</body>
</html>