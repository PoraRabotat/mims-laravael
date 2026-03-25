<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог товаров</title>
    <style>
    </style>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

<div class="controls">
    <a href="{{ route('home') }}" class="btn-home"> На главную</a>
    <strong>Действия:</strong>
    <a href="{{ route('array.shuffle') }}" class="btn-shuffle">Перемешать</a>
    <a href="{{ route('array.sort') }}" class="btn-sort">Сортировать (по цене)</a>
    <a href="{{ route('array.filter') }}" class="btn-filter">Фильтр (Больше >1000 руб)</a>
</div>

<h2>Список товаров</h2>

<div class="grid-container">
    @foreach($array as $item)
        <div class="card">
            <img src="{{ asset('img/' . $item['path']) }}" alt="{{ $item['title'] }}">
            <h3>{{ $item['title'] }}</h3>
            <p>{{ $item['price'] }} руб.</p>
        </div>
    @endforeach
</div>

</body>
</html>