<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <p>Страна: {{ $location['country'] ?? 'Россия'}}</p>
    <p>Город: {{ $location['city'] ?? 'Москва'}}</p>
</body>
</html>