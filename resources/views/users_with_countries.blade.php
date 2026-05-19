<!DOCTYPE html>
<html>
<head>
    <title>Пользователи и страны</title>
</head>
<body>
    <h1>Пользователи с их странами</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr><th>ID</th><th>Логин</th><th>Страна</th></tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->login }}</td>
                <td>{{ $user->city->country->name ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>