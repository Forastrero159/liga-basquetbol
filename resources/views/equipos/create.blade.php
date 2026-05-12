<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Equipo</title>
    <style>
        body { font-family: Arial; background: #f3f4f6; }
        .contenedor { width: 50%; margin: 40px auto; background: white; padding: 25px; border-radius: 10px; }
        input { width: 100%; padding: 10px; margin: 8px 0; }
        button, a { padding: 10px 14px; background: #2563eb; color: white; border: none; border-radius: 5px; text-decoration: none; }
    </style>
</head>
<body>
<div class="contenedor">
    <h1>Registrar Equipo</h1>

    <form action="{{ route('equipos.store') }}" method="POST">
        @csrf

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Ciudad:</label>
        <input type="text" name="ciudad">

        <label>Entrenador:</label>
        <input type="text" name="entrenador">

        <button type="submit">Guardar</button>
        <a href="{{ route('equipos.index') }}">Volver</a>
    </form>
</div>
</body>
</html>