<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Liga de Básquetbol</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f3f4f6; margin: 0; }
        .contenedor { width: 80%; margin: 60px auto; background: white; padding: 30px; border-radius: 10px; text-align: center; }
        h1 { color: #1f2937; }
        a { display: inline-block; margin: 10px; padding: 12px 18px; background: #2563eb; color: white; text-decoration: none; border-radius: 6px; }
        a:hover { background: #1d4ed8; }
    </style>
</head>
<body>
    <div class="contenedor">
        <h1>Sistema de Gestión de Liga de Básquetbol</h1>
        <p>Aplicación web desarrollada en Laravel para administrar equipos, jugadores, partidos, resultados y estadísticas básicas.</p>

        <a href="{{ route('equipos.index') }}">Equipos</a>
        <a href="{{ route('jugadores.index') }}">Jugadores</a>
        <a href="{{ route('partidos.index') }}">Partidos</a>
        <a href="{{ route('estadisticas') }}">Estadísticas</a>
    </div>
</body>
</html>