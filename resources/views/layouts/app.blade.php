<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Una Sorpresa Speciale')</title>
    
    <style>
        body {
            /* Sfondo con gradiente delicato */
            background: linear-gradient(135deg, #4c1d95, #be185d, #b91c1c);
            color: #fff;
            /* Usa font di sistema comuni per la massima compatibilità offline */
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            text-align: center;
            overflow: hidden; /* Nasconde lo scroll */
        }

        .card {
            background: rgba(0, 0, 0, 0.4); /* Sfondo della card semi-trasparente */
            padding: 40px 50px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px); /* Effetto vetro smerigliato */
            max-width: 650px;
            animation: fadeIn 1.5s ease-in-out; /* Animazione di entrata */
        }
        
        h1 {
            /* Usa Georgia, un font elegante già presente su quasi tutti i sistemi */
            font-family: Georgia, 'Times New Roman', Times, serif;
            font-size: 2.8em;
            color: #fecdd3; /* Un rosa pallido per i titoli */
            margin-bottom: 20px;
            line-height: 1.2;
        }

        p {
            font-size: 1.2em;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
        }

        #timer {
            font-size: 3.5em;
            font-weight: 500;
            color: #fff;
            margin-top: 25px;
            letter-spacing: 3px;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.5);
        }

        /* Animazione di entrata */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    
    <div class="card">
        @yield('content')
    </div>

    @yield('scripts')

</body>
</html>