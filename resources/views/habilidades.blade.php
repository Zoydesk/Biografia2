<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Habilidades — Raul Beltran</title>

    <!-- Fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

    <style>
        .back-link {
            display: block;
            /* Ocupa todo el ancho disponible */
            margin: 20px auto 0 auto;
            /* Lo centra horizontalmente */
            color: var(--muted);
            text-decoration: none;
            font-weight: 600;
            border: 1px solid rgba(255, 255, 255, 0.04);
            padding: 8px 12px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.015);
            transition: all .15s ease;
            text-align: center;
            /* Centra el texto dentro del botón */
            width: fit-content;
            /* Hace que el ancho sea solo lo que ocupa el texto */
        }

        :root {
            --bg1: #0f1220;
            --bg2: #12162a;
            --card: #141726;
            --glass: rgba(255, 255, 255, 0.04);
            --text: #e7e9ef;
            --muted: #9ea6b8;
            --accent-a: #6ee7ff;
            --accent-b: #9b87ff;
            --radius: 14px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            height: 100%;
        }

        body {
            font-family: "Inter", system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background:
                radial-gradient(800px 300px at 10% 5%, rgba(155, 135, 255, 0.08), transparent 25%),
                radial-gradient(700px 260px at 100% 90%, rgba(110, 231, 255, 0.06), transparent 20%),
                linear-gradient(180deg, var(--bg1), var(--bg2));
            color: var(--text);
            -webkit-font-smoothing: antialiased;
            padding: 36px 20px;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 28px;
        }

        .header h1 {
            font-size: clamp(28px, 5vw, 40px);
            background: linear-gradient(90deg, var(--accent-a), var(--accent-b));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: -0.01em;
        }

        .header p {
            color: var(--muted);
            margin-top: 6px;
            font-weight: 600;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 18px;
            margin-top: 22px;
        }

        @media(min-width:760px) {
            .grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        .skill {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.02), rgba(255, 255, 255, 0.01));
            border: 1px solid rgba(255, 255, 255, 0.04);
            padding: 18px;
            border-radius: var(--radius);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.45);
            transition: transform .18s ease, box-shadow .18s ease;
            min-height: 150px;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .skill:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 42px rgba(0, 0, 0, 0.55);
            border-color: rgba(155, 135, 255, 0.14);
        }

        .icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            display: inline-grid;
            place-items: center;
            font-weight: 700;
            font-size: 20px;
            color: white;
            background: linear-gradient(135deg, var(--accent-a), var(--accent-b));
            box-shadow: 0 6px 16px rgba(0, 0, 0, 0.35);
        }

        .skill-head {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .skill h2 {
            font-size: 1.05rem;
            margin: 0;
            letter-spacing: 0;
        }

        .skill .muted {
            color: var(--muted);
            font-size: 0.95rem;
            line-height: 1.4;
        }

        .skill p {
            color: var(--muted);
            margin-top: 6px;
            line-height: 1.5;
            font-size: 0.98rem;
            flex: 1;
        }

        /* detalle de puntos */
        .points {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-top: 8px;
        }

        .tag {
            font-size: 0.8rem;
            color: var(--text);
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.03);
            padding: 6px 10px;
            border-radius: 999px;
        }


        .back-link:hover {
            transform: translateY(-3px);
            border-color: var(--accent-a);
            color: var(--text);
        }

        /* pequeño footer */
        .footer-note {
            text-align: center;
            color: var(--muted);
            margin-top: 26px;
            font-size: 0.95rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>Mis Habilidades</h1>
            <p>Resumen breve y claro de lo que sé hacer</p>
        </header>

        <section class="grid">
            <article class="skill">
                <div class="skill-head">
                    <div class="icon">Py</div>
                    <div>
                        <h2>Primera habilidad — Python OOP</h2>
                        <div class="muted">Orientado a objetos · aplicaciones · juegos</div>
                    </div>
                </div>

                <p>
                    Adquirí experiencia trabajando con Python, especialmente en programación orientada a objetos.
                    He creado aplicaciones y recreado juegos básicos como <em>Snake</em> y <em>Pong</em>, lo que me
                    ayudó
                    a entender diseño de clases, herencia y pruebas.
                </p>

                <div class="points">
                    <span class="tag">OOP</span>
                    <span class="tag">Proyectos</span>
                    <span class="tag">Juegos</span>
                </div>
            </article>

            <article class="skill">

                
                <div class="skill-head">
                    <div class="icon">JS</div>
                    <div>
                        <h2>Segunda habilidad — Frontend</h2>
                        <div class="muted">HTML · CSS · JavaScript</div>
                    </div>
                </div>

                <p>
                    Trabajando con JavaScript conseguí la experiencia necesaria para desarrollar el frontend de
                    aplicaciones web,
                    complementado con CSS para dar estilo y UX a los proyectos. Manejo la manipulación del DOM y
                    conceptos modernos.
                </p>

                <div class="points">
                    <span class="tag">HTML</span>
                    <span class="tag">CSS</span>
                    <span class="tag">Vanilla JS</span>
                </div>
                
            </article>

            <article class="skill">

            </article>
        </section>


    </div>

    <a class="back-link" href="{{ url('/Yo') }}">← Volver a la biografía</a>

</body>

</html>
