<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Biografía — Raul Beltran</title>

  <!-- Fuente bonita -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">

      <style>
        .btn-exp {
          background: linear-gradient(135deg, #6ee7ff, #9b87ff);
          color: #fff;
          border: none;
          padding: 12px 28px;
          border-radius: 12px;
          font-size: 1rem;
          font-weight: 600;
          cursor: pointer;
          transition: transform 0.2s ease, box-shadow 0.2s ease;
          box-shadow: 0 6px 15px rgba(0, 0, 0, 0.25);
        }

        .btn-exp:hover {
          transform: translateY(-3px);
          box-shadow: 0 12px 25px rgba(0, 0, 0, 0.35);
        }

        .btn-exp:active {
          transform: translateY(0);
          box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>

  <style>
    
    :root{
      --bg: #0f1220;
      --bg2: #12162a;
      --card: #161a31;
      --text: #e6e7ee;
      --muted:#aab0c0;
      --accent:#6ee7ff; 
      --accent2:#9b87ff; 
      --ring: rgba(110, 231, 255, .35);
      --radius: 18px;
    }

    *{ box-sizing: border-box; }

    html, body {
      height: 100%;
      margin: 0;
      font-family: "Inter", system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
      color: var(--text);
      background:
        radial-gradient(1200px 600px at 10% -10%, rgba(155,135,255,.18), transparent 60%),
        radial-gradient(1000px 500px at 110% 10%, rgba(110,231,255,.15), transparent 55%),
        linear-gradient(180deg, var(--bg), var(--bg2));
    }

    .wrap{
      max-width: 880px;
      margin: 64px auto;
      padding: 0 20px;
    }

    .header{
      text-align: center;
      margin-bottom: 28px;
    }
    .title{
      font-size: clamp(34px, 6vw, 54px);
      line-height: 1.05;
      margin: 0 0 8px;
      letter-spacing: -0.02em;
      background: linear-gradient(90deg, var(--accent), var(--accent2));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }
    .subtitle{
      margin: 0;
      color: var(--muted);
      font-weight: 600;
    }

    .card{
      background: color-mix(in srgb, var(--card) 92%, black 8%);
      border: 1px solid rgba(255,255,255,.06);
      border-radius: var(--radius);
      box-shadow:
        0 10px 30px rgba(0,0,0,.35),
        inset 0 1px 0 rgba(255,255,255,.05);
      overflow: hidden;
    }

    .hero{
      height: 90px;
      background:
        radial-gradient(650px 120px at 20% 30%, rgba(110,231,255,.25), transparent 60%),
        radial-gradient(650px 140px at 80% 20%, rgba(155,135,255,.25), transparent 60%),
        linear-gradient(90deg, rgba(255,255,255,.05), transparent);
      border-bottom: 1px solid rgba(255,255,255,.05);
    }

    .content{
      padding: 28px;
    }

    .about{
      font-size: 1.05rem;
      color: var(--text);
      line-height: 1.7;
      margin: 0 0 14px;
    }

    .grid{
      display: grid;
      grid-template-columns: 1fr;
      gap: 16px;
      margin-top: 18px;
    }
    @media (min-width: 720px){
      .grid{ grid-template-columns: repeat(3, 1fr); }
    }

    .section{
      background: rgba(255,255,255,.02);
      border: 1px solid rgba(255,255,255,.06);
      border-radius: calc(var(--radius) - 6px);
      padding: 18px;
      transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease;
    }
    .section:hover{
      transform: translateY(-2px);
      border-color: color-mix(in srgb, var(--accent) 40%, white 0%);
      box-shadow: 0 8px 22px rgba(0,0,0,.35);
    }

    .section h3{
      margin: 0 0 8px;
      font-size: 1.15rem;
      letter-spacing: .2px;
      display: inline-flex;
      align-items: center;
      gap: 8px;
    }
    .badge{
      font-size: .7rem;
      padding: 4px 8px;
      border-radius: 999px;
      background: linear-gradient(90deg, rgba(110,231,255,.18), rgba(155,135,255,.18));
      border: 1px solid rgba(255,255,255,.12);
      color: var(--text);
    }

    .section p{
      margin: 8px 0 0;
      color: var(--muted);
      line-height: 1.65;
    }

    .footer{
      text-align: center;
      margin-top: 28px;
      color: var(--muted);
      font-size: .95rem;
    }

    /* Botoncitos */
    .pill{
      display: inline-block;
      margin: 16px 6px 0;
      padding: 10px 14px;
      border-radius: 999px;
      border: 1px solid rgba(255,255,255,.1);
      background: linear-gradient(90deg, rgba(110,231,255,.08), rgba(155,135,255,.08));
      text-decoration: none;
      color: var(--text);
      font-weight: 600;
      box-shadow: 0 6px 14px rgba(0,0,0,.25);
      transition: transform .15s ease, box-shadow .15s ease, border-color .15s ease;
    }
    .pill:hover{
      transform: translateY(-1px);
      border-color: var(--ring);
      box-shadow: 0 10px 20px rgba(0,0,0,.35), 0 0 0 6px var(--ring);
    }
  </style>
</head>
<body>
  <main class="wrap">
    <header class="header">
      <h1 class="title">Raul Beltran</h1>
      <p class="subtitle">Biografía • Metas • Historia</p>
    </header>

    <section class="card">
      <div class="hero"></div>
      <div class="content">
        <p class="about">

          Nací el 12 de diciembre en Barrancabermeja, mis padres son Yesenia Contreras y Raul Beltran.
          Cuento con 2 hermanos, una niña y un niño, ambos menores.

        </p>

        <div class="grid">
          <article class="section">

            <h3>Niñez <span class="badge">Recuerdos</span></h3>
            <p>
              Cuando era niño vivía en un conjunto cerrado en el cual tenía muchos amigos y salía a jugar con ellos:
              fútbol, montar bicicleta o simplemente conversar sobre lo que les gusta a los niños; juegos de “matar”
              y épicas batallas de rap del frikismo. También iba al colegio.
            </p>
 
          </article>

          <article class="section">

            <h3>Adolescencia <span class="badge">Gaming</span></h3>
            <p>
              En mi adolescencia mi vida se basaba en jugar videojuegos y, para rematar, cayó la pandemia, donde vicié aún más,
              especialmente con Fortnite. Cuando terminó la pandemia empecé a salir de fiestas donde hice muchas más amistades.
            </p>
         
          </article>

          <article class="section">
 
          </article>
        </div>

        <article class="section" style="margin-top:16px;">


          <!-- Botones -->
          <!-- Botón con clase "btn-exp" -->
          {{-- <button class="btn-exp" onclick="window.location.href='{{ route('exp') }}'">
          Experiencia laboral
          </button>

          <button class="btn-exp" onclick="window.location.href='{{ route('habilidades') }}'">
          Habilidades
          </button>

          <button class="btn-exp" onclick="window.location.href='{{ route('academia') }}'">
          Academia
          </button> --}}


        </article>
      </div>
    </section>

  </main>
</body>
</html>
