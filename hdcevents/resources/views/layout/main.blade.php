<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
            <h2>LOGO</h2>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="/">home</a></li>
                <li><a href="/contacts">contatos</a></li>
            </ul>
        </nav>
    </header>
    @yield('content')
    <footer>Site de Kauã Santiago &copy; 2023</footer>
    <script src='./js/script.js'></script>
</body>

</html>
