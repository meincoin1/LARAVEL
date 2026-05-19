<!DOCTYPE html>
<html>
<head>
    <title>Страны и города</title>
</head>
<body>
    <h1>Список стран с городами</h1>
    
    @foreach($countries as $country)
    <div style="margin-bottom: 20px; border: 1px solid #ccc; padding: 10px;">
        <h2>{{ $country->name }}</h2>
        <ul>
            @foreach($country->cities as $city)
            <li>{{ $city->name }}</li>
            @endforeach
        </ul>
        <p><strong>Всего городов:</strong> {{ $country->cities->count() }}</p>
    </div>
    @endforeach
    
    <a href="/users/cities">Назад</a>
</body>
</html>