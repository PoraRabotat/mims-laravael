<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ВТОРАЯ СТРАНИЦА</title>
    @Vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1>Vtoraya straniza</h1>

    <p>{{ $num }}</p>
    <p>{{ $str.', world!' }}</p>
    
    <div>
    @for ($i = 0; $i < count($mas); $i++)
        <p>{{ $mas[$i] }}</p>
    @endfor
    </div>
</body>
</html>