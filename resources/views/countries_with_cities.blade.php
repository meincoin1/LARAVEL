<!DOCTYPE html>
<html>
<head>
    <title>Страны и города</title>
</head>
<body>
    <h1>Список стран с городами</h1>
    @foreach($countries as $country)
    <div>
        <h2>{{ $country->name }}</h2>
        <ul>
            @foreach($country->cities as $city)
            <li>{{ $city->name }}</li>
            @endforeach
        </ul>
        <p>Всего городов: {{ $country->cities->count() }}</p>
    </div>
    <hr>
    @endforeach
</body>
</html>