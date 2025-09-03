<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Experiencia Laboral</title>

    <!-- Fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=sswap" rel="stylesheet">

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

        :root {
            --bg: #0f1220;
            --bg2: #12162a;
            --card: #161a31;
            --text: #e6e7ee;
            --muted: #aab0c0;
            --accent: #6ee7ff;
            --accent2: #9b87ff;
            --radius: 16px;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Inter", sans-serif;
            color: var(--text);
            background: linear-gradient(180deg, var(--bg), var(--bg2));
            line-height: 1.7;
            padding: 32px 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        h1.title {
            text-align: center;
            font-size: 2.4rem;
            background: linear-gradient(90deg, var(--accent), var(--accent2));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 40px;
        }

        .timeline {
            position: relative;
            padding-left: 30px;
            border-left: 3px solid rgba(255, 255, 255, .1);
        }

        .event {
            margin-bottom: 40px;
            position: relative;
            padding-left: 20px;
        }

        .event::before {
            content: "";
            position: absolute;
            left: -11px;
            top: 8px;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            background: linear-gradient(90deg, var(--accent), var(--accent2));
            box-shadow: 0 0 8px rgba(110, 231, 255, .6);
        }

        .event h2 {
            margin: 0 0 10px;
            font-size: 1.4rem;
            font-weight: 700;
        }

        .event p {
            margin: 0;
            color: var(--muted);
            font-size: 1rem;
        }

        .card {
            background: var(--card);
            border: 1px solid rgba(255, 255, 255, .08);
            border-radius: var(--radius);
            padding: 18px 20px;
            transition: transform .2s ease, box-shadow .2s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, .4);
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="title">Mi Experiencia</h1>

        <div class="timeline">
            <div class="event">
                <div class="card">
                    <h2>1er Año</h2>
                    <p>
                        Conseguí experiencia trabajando en <b>Python</b>, especialmente en la orientación a objetos,
                        creando aplicaciones y recreando juegos básicos como <i>Snake</i> o <i>Pong</i>.
                    </p>
                </div>
            </div>

            <div class="event">
                <div class="card">

                </div>
            </div>

            <div class="event">
                <div class="card">

                </div>
            </div>
        </div>
    </div>

    <a class="back-link" href="{{ url('/Yo') }}">← Volver a la biografía</a>
</body>

</html>
