<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo', 'Liga de Básquetbol')</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: radial-gradient(circle at top, #1e3a8a, #020617 65%);
            color: white;
            min-height: 100vh;
        }

        .navbar {
            background: rgba(2, 6, 23, 0.92);
            border-bottom: 1px solid rgba(250, 204, 21, 0.35);
            padding: 18px 6%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .marca {
            font-size: 22px;
            font-weight: bold;
            color: #facc15;
            text-decoration: none;
        }

        .menu a {
            color: white;
            text-decoration: none;
            margin-left: 18px;
            font-weight: bold;
            font-size: 14px;
        }

        .menu a:hover {
            color: #facc15;
        }

        .contenedor {
            width: 90%;
            margin: 35px auto;
            background: rgba(15, 23, 42, 0.93);
            padding: 30px;
            border-radius: 18px;
            border: 1px solid rgba(250, 204, 21, 0.35);
            box-shadow: 0 12px 35px rgba(0,0,0,0.45);
        }

        .encabezado {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        h1 {
            margin: 0;
            color: #facc15;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .subtitulo {
            color: #cbd5e1;
            margin-top: 8px;
        }

        .acciones a, .btn, button {
            padding: 10px 14px;
            border-radius: 8px;
            text-decoration: none;
            border: none;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-principal {
            background: #facc15;
            color: #111827;
        }

        .btn-secundario {
            background: #334155;
            color: white;
        }

        .btn-editar {
            background: #2563eb;
            color: white;
        }

        .btn-eliminar {
            background: #dc2626;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            overflow: hidden;
            border-radius: 12px;
            background: #0f172a;
        }

        th {
            background: #facc15;
            color: #111827;
            padding: 14px;
            text-transform: uppercase;
            font-size: 13px;
        }

        td {
            padding: 13px;
            text-align: center;
            border-bottom: 1px solid #334155;
            color: #e5e7eb;
        }

        tr:hover {
            background: rgba(37, 99, 235, 0.22);
        }

        input, select {
            width: 100%;
            padding: 11px;
            margin: 7px 0 15px 0;
            border-radius: 8px;
            border: 1px solid #475569;
            background: #020617;
            color: white;
            box-sizing: border-box;
        }

        label {
            color: #facc15;
            font-weight: bold;
        }

        .formulario {
            max-width: 650px;
            margin: auto;
        }

        .mensaje {
            background: rgba(34, 197, 94, 0.18);
            color: #86efac;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #22c55e;
            margin-bottom: 15px;
        }

        .tarjeta {
            display: inline-block;
            width: 190px;
            margin: 15px;
            padding: 25px;
            background: #0f172a;
            color: white;
            border-radius: 16px;
            border: 1px solid rgba(250, 204, 21, 0.35);
            box-shadow: 0 10px 25px rgba(0,0,0,0.35);
        }

        .numero {
            font-size: 42px;
            font-weight: bold;
            color: #facc15;
        }

        @media(max-width: 800px) {
            .encabezado, .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .menu a {
                display: inline-block;
                margin: 8px 8px 0 0;
            }
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="{{ route('inicio') }}" class="marca">🏀 Liga Basket</a>
    <div class="menu">
        <a href="{{ route('equipos.index') }}">Equipos</a>
        <a href="{{ route('jugadores.index') }}">Jugadores</a>
        <a href="{{ route('partidos.index') }}">Partidos</a>
        <a href="{{ route('estadisticas') }}">Estadísticas</a>
    </div>
</div>

@yield('contenido')

</body>
</html>