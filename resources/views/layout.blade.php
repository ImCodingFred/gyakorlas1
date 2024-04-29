<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="shortcut icon" href="{{asset('img/magyar-falu-program.png')}}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pusztaszentmária</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
    <script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</head>
<body>
    <header class="container-fluid d-flex justify-content-center align-items-center text-white">
        <h1>Üdvözöljük településünk honlapján</h1>
    </header>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Pusztaszentmária</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-link" href="/hirek">Hírek</a>
                <a class="nav-link" href="/vendegkonyv">Vendégkönyv</a>
                @guest
                    <a class="nav-link" href="/belepes">Belépés</a>
                    <a class="nav-link" href="/regisztracio">Regisztráció</a>
                @else
                    <a class="nav-link" href="/kilepes">Kilépés</a>
                @endguest
                </div>
            </div>
        </div>
    </nav>
    <main class="container mt-3">
        <div class="row">
            <div class="col-md-9">
                @yield('content')
            </div>
            <div class="col-md-3">
                @include('sidebar')
            </div>
        </div>
    </main>
<footer class="bg-dark container-fluid">
    <div class="container text-white">
        <h5 class="pt-3">Elérhetőségek</h5>
        <hr>
        <div class="row">
            <div class="col-sm">
                <p>
                    Polgármesteri Hivatal<br>
                    6666, Pusztaszentmária, Petőfi út 1
                </p>
            </div>
            <div class="col-sm">
                <p>
                    Tel: <a class="link-light" href="tel:06-66-123-456">06/66 123-456</a><br>
                    <a class="link-light" href="mailto:hivatal@pusztaszentmaria.hu">
                    hivatal@pusztaszentmaria.hu
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
