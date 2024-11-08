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
        <h4>VÄLKOMMEN TILL</h4>
        <h1>FITCHECK.UF</h1>
    </header>

    <div class="image-container">
        <img src="{{ asset('assets/images/outfit_showcase.jpg') }}" alt="FitCheck">
        <img src="{{ asset('assets/images/outfit_showcase2.jpg') }}" alt="FitCheck">
    <div>

    <div class="about-us">
        <h1>OM OSS<h1>
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
                <li class="carousel-slide"><img src="{{ asset('assets/images/outfit_showcase.jpg') }}" alt="FitCheck"></li>
                <li class="carousel-slide"><img src="{{ asset('assets/images/outfit_showcase2.jpg') }}" alt="FitCheck"></li>
                <li class="carousel-slide"><img src="{{ asset('assets/images/outfit_showcase3.jpg') }}" alt="FitCheck"></li>
                <li class="carousel-slide"><img src="{{ asset('assets/images/outfit_showcase4.jpg') }}" alt="FitCheck"></li>
                <li class="carousel-slide"><img src="{{ asset('assets/images/outfit_showcase5.jpg') }}" alt="FitCheck"></li>
            </ul>
        </div>
        <button class="carousel-button right">
            <img src="{{ asset('assets/icons/right_arrow.png') }}" alt="Right arrow">
        </button>
    </div>

    <div class="premium-container">
        <h1>SKAFFA PREMIUM<h1>
        <p>
            Skaffa vår premium version för få <br>tillgång till
            <span>exklusiva</span> funktioner!
        </p>
        <div class="subscribe-container">
            <h2>20KR/MÅNADEN</h2>
        </div>
    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
