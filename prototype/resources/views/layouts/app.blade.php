<!DOCTYPE html>
<html>
<head>
    <title>Mon application Laravel</title>
</head>
<body>
    <header>
    <nav>
    <a href="/">home</a>
    <a href="contact">contact</a>
</nav>
    </header>

    @yield('content')

    <footer>
        &copy; 2023 Tous droits réservés.
    </footer>
</body>
</html>