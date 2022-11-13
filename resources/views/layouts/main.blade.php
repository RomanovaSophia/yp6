<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Наш сайт</title>
</head>
<body>
<header>
    Шапка
    @guest()
        <a href="{{ route('login') }}">Войти</a>
    @endguest
    @auth()
        <a href="{{ route('logout') }}">Выйти</a>
    @endauth
    <hr>
    @auth()
        <a href="{{ route('user') }}">Кабинет</a>
        <a href="{{ route('logout') }}">Выйти</a>
    @endauth
</header>
@yield('content')
<footer>
    <hr>
    Подвал
</footer>
</body>
</html>
