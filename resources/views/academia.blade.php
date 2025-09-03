<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia — Raul Beltran</title>
    <style>
        .back-link {
            display: inline-block;
            margin-top: 20px;
            color: var(--muted);
            text-decoration: none;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.04);
            padding: 8px 12px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.015);
            transition: all 0.2s ease;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            display: block;
            max-width: fit-content;
            /* evita que se expanda de más */
        }

        .back-link:hover {
            background: rgba(255, 255, 255, 0.05);
            border-color: rgba(255, 255, 255, 0.1);
            transform: scale(1.05);
            /* el zoom */
            color: #fff;
        }


        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0f172a, #1e293b);
            color: #e2e8f0;
            line-height: 1.6;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            padding: 20px;
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            background: linear-gradient(90deg, #60a5fa, #a78bfa);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p.subtitle {
            color: #94a3b8;
            margin-bottom: 40px;
        }

        .card {
            background: rgba(30, 41, 59, 0.9);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
            text-align: left;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.6);
        }

        .card h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
            color: #60a5fa;
        }

        .card p {
            font-size: 1rem;
            color: #cbd5e1;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Mi Trayectoria Académica</h1>
        <p class="subtitle">Un vistazo a mi formación desde la escuela hasta la universidad</p>

        <div class="card">
            <h2>Escuela</h2>
            <p>En la escuela siempre destaqué por ocupar los primeros puestos. Era un niño estudioso donde adquirí las
                habilidades más importantes de mi vida: las sociales. Allí aprendí a convivir en la sociedad y a
                sobrevivir en ella.</p>
        </div>



    <a class="back-link" href="{{ url('/Yo') }}">← Volver a la biografía</a>
</body>



</html>
