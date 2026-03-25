<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
</head>
<body>

<header>
    <div class="logo"><h1>Моё лого</h1></div>
    <nav>
        <a href="{{ route('home') }}">Главная</a>
        <a href="{{ route('array') }}">Массивы</a>
    </nav>
</header>

<main>
    <h2>Добро пожаловать на главную!</h2>
    <img src="{{ asset('img/dsr.jpg') }}" alt="Пример картинки">
    <p>Здесь какой-то приветственный текст.</p>
</main>

<footer> 
    &copy; 2026 | Соколов Сергей Сергеевич
</footer>

</body>
</html>
