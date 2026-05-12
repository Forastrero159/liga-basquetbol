<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Liga de Básquetbol</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: radial-gradient(circle at top, #1e3a8a, #020617 60%);
            color: white;
            min-height: 100vh;
        }

        .contenedor {
            width: 85%;
            margin: auto;
            padding-top: 70px;
            text-align: center;
        }

        .logo {
            font-size: 64px;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 42px;
            margin-bottom: 10px;
            color: #facc15;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .subtitulo {
            font-size: 18px;
            color: #d1d5db;
            margin-bottom: 40px;
        }

        .panel {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-top: 30px;
        }

        .card {
            background: rgba(15, 23, 42, 0.9);
            border: 1px solid rgba(250, 204, 21, 0.4);
            border-radius: 16px;
            padding: 28px 18px;
            text-decoration: none;
            color: white;
            box-shadow: 0 10px 30px rgba(0,0,0,0.35);
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-8px);
            background: #111827;
            border-color: #facc15;
        }

        .icono {
            font-size: 40px;
            margin-bottom: 12px;
        }

        .card h2 {
            margin: 10px 0;
            color: #facc15;
        }

        .card p {
            color: #cbd5e1;
            font-size: 14px;
        }

        .footer {
            margin-top: 50px;
            color: #94a3b8;
            font-size: 14px;
        }

        @media(max-width: 900px) {
            .panel {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media(max-width: 600px) {
            .panel {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="contenedor">
        <div class="logo">🏀</div>
        <h1>Liga de Básquetbol</h1>
        <p class="subtitulo">
            Sistema web para la gestión de equipos, jugadores, partidos, resultados y estadísticas.
        </p>

        <div class="panel">
            <a href="{{ route('equipos.index') }}" class="card">
                <div class="icono">🏆</div>
                <h2>Equipos</h2>
                <p>Registro y administración de equipos participantes.</p>
            </a>

            <a href="{{ route('jugadores.index') }}" class="card">
                <div class="icono">⛹️</div>
                <h2>Jugadores</h2>
                <p>Gestión de jugadores asociados a cada equipo.</p>
            </a>

            <a href="{{ route('partidos.index') }}" class="card">
                <div class="icono">🔥</div>
                <h2>Partidos</h2>
                <p>Control de encuentros, marcadores y estado del partido.</p>
            </a>

            <a href="{{ route('estadisticas') }}" class="card">
                <div class="icono">📊</div>
                <h2>Estadísticas</h2>
                <p>Resumen general de equipos, jugadores y partidos.</p>
            </a>
        </div>

        <div class="footer">
            Proyecto desarrollado en Laravel | Gestión de Liga Deportiva
        </div>
    </div>
</body>
</html>