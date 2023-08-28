<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" sizes="60x60" href="./img/experienceEventsLogo.ico" type="image/x-icon">
    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->

    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <header>
        <div class="logo">
            <img src="./img/experienceLogoWhite.svg" alt="Experience Events">
        </div>
        <nav>
            <ul class="menu">
                <li><a href="/">Eventos</a></li>
                <li><a href="create">Criar Evento</a></li>
                <li><a href="/contacts">Cadastrar</a></li>
                <li><a href="/contacts">Entrar</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer>
        <p>Site de <i>Kauã Santiago</i> &copy; 2023</p>
    </footer>
    <script src='./js/script.js'></script>
</body>

</html>
