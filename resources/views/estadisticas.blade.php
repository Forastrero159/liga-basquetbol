<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estadísticas</title>
    <style>
        body { font-family: Arial; background: #f3f4f6; }
        .contenedor { width: 80%; margin: 40px auto; background: white; padding: 25px; border-radius: 10px; text-align: center; }
        .tarjeta { display: inline-block; width: 180px; margin: 15px; padding: 20px; background: #2563eb; color: white; border-radius: 10px; }
        .numero { font-size: 34px; font-weight: bold; }
        a { display: inline-block; margin-top: 20px; padding: 10px 15px; background: #374151; color: white; text-decoration: none; border-radius: 5px; }
    </style>
</head>
<body>
<div class="contenedor">
    <h1>Estadísticas Básicas de la Liga</h1>

    <div class="tarjeta">
        <div class="numero">{{ $totalEquipos }}</div>
        <p>Equipos</p>
    </div>

    <div class="tarjeta">
        <div class="numero">{{ $totalJugadores }}</div>
        <p>Jugadores</p>
    </div>

    <div class="tarjeta">
        <div class="numero">{{ $totalPartidos }}</div>
        <p>Partidos</p>
    </div>

    <div class="tarjeta">
        <div class="numero">{{ $partidosFinalizados }}</div>
        <p>Finalizados</p>
    </div>

    <br>
    <a href="{{ route('inicio') }}">Volver al inicio</a>
</div>
</body>
</html>