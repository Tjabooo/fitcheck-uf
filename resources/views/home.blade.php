<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
  <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
  <title>FitCheck UF</title>
  <style>
  </style>
</head>
<body>
    <header>
        <h4 id="underline">VÄLKOMMEN TILL</h4>
        <h1>FITCHECK.UF</h1>
    </header>

    <img id="header-img" src="{{ asset('assets/images/outfit_showcase7.jpg') }}" alt="FitCheck">
    <img id="header-img" src="{{ asset('assets/images/outfit_showcase9.jpg') }}" alt="FitCheck">

    <div class="go-to-app-container">
        <button>
            <a id="underline" href="{{ route('app.redirect') }}">
                GÅ TILL APPEN
            </a>
        </button>
    </div>

    <div class="about-us">
        <h1 id="underline">OM OSS<h1>
        <div class="text-container">
            <p>
                Vi är ett UF-företag från Stockholm som består av
                5 personer. Vi har lanserat en app som genererar
                outfits åt dig med hjälp av AI, baserat på din egen garderob.
            </p>
        </div>
    </div>

    <div class="carousel">
        <button class="carousel-button left">
            <img src="{{ asset('assets/icons/left_arrow.png') }}" alt="Left arrow">
        </button>
        <div class="carousel-track-container">
            <ul class="carousel-track">
                <li class="carousel-slide"><img src="{{ asset('assets/images/outfit_showcase8.jpg') }}" alt="FitCheck"></li>
                <li class="carousel-slide"><img src="{{ asset('assets/images/outfit_showcase.jpg') }}" alt="FitCheck"></li>
                <li class="carousel-slide"><img src="{{ asset('assets/images/outfit_showcase10.jpg') }}" alt="FitCheck"></li>
                <li class="carousel-slide"><img src="{{ asset('assets/images/outfit_showcase11.jpg') }}" alt="FitCheck"></li>
                <li class="carousel-slide"><img src="{{ asset('assets/images/outfit_showcase6.jpg') }}" alt="FitCheck"></li>
                <li class="carousel-slide"><img src="{{ asset('assets/images/outfit_showcase3.jpg') }}" alt="FitCheck"></li>
                <li class="carousel-slide"><img src="{{ asset('assets/images/outfit_showcase.jpg') }}" alt="FitCheck"></li>
            </ul>
        </div>
        <button class="carousel-button right">
            <img src="{{ asset('assets/icons/right_arrow.png') }}" alt="Right arrow">
        </button>
    </div>

    <div class="premium-container">
        <h1 id="underline">BLI EN FASHION-STAR!<h1>
        <p>
            Skaffa vår premium version för att få <br id="smol">tillgång till
            <span id="underline">exklusiva</span> funktioner!
        </p>
        <div class="subscribe-container">
            <h2>20KR/MÅNADEN
                <span>240kr/år</span>
            </h2>

            <p>INNEHÅLL:</p>
            <ul class="premium-benefits">
                <li>Lägg in upp till 100 klädesplagg (istället för 25)</li>
                <li>Generera upp till 10 outfits per dag (istället för 5)</li>
                <li>Ingen reklam!</li>
            </ul>

            <button class="join-premium">
                SKAFFA PREMIUM
            </button>
        </div>
    </div>

    <div class="footer">
        <h2>
            KONTAKTA OSS
        </h2>

        <p>
            <img src="{{ asset('assets/icons/instagram-icon.png') }}" alt="Instagram">
            INSTAGRAM: FITCHECK_UF
        </p>
        <p>
            <img src="{{ asset('assets/icons/email-icon.png') }}" alt="Mejl">
            MEJL: KONTAKT@FITCHECK.NU
        </p>
        <p>
            <img src="{{ asset('assets/icons/location-icon.png') }}" alt="Address">
            BORGARFJORDSGATAN 6C, 164 55 STOCKHOLM
        </p>

        <p class="footer-copyright">
            @ 2024 FitCheckUF
        </p>

        <img class="footer-logo" src="{{ asset('assets/icons/bw-logo.png') }}" alt="FitCheckUF Logga">
    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
