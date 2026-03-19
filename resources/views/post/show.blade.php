<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <ul>
        @foreach ($employees as $emplo)
            <li>Имя: {{$emplo['name'] }}. Фамилия: {{ $emplo['surname'] }}. Зарплата: {{ $emplo['salary'] }}</li>
        @endforeach
    </ul>
</body>
</html>