<!DOCTYPE html>
<html>
<head>
    <title>Города и страны</title>
</head>
<body>
    <h1>Список городов со странами</h1>
    
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Город</th>
                <th>Страна</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cities as $city)
            <tr>
                <td>{{ $city->id }}</td>
                <td>{{ $city->name }}</td>
                <td>{{ $city->country->name ?? 'Не указана' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <p><strong>Всего городов:</strong> {{ $cities->count() }}</p>
    
    <a href="/users/cities">Назад к списку пользователей</a>
</body>
</html>