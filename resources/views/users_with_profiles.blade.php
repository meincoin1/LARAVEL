<!DOCTYPE html>
<html>
<head>
    <title>Пользователи и профили</title>
</head>
<body>
    <h1>Список пользователей с профилями</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr><th>ID</th><th>Логин</th><th>Имя</th><th>Фамилия</th><th>Email</th></tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->login }}</td>
                <td>{{ $user->profile->name ?? '-' }}</td>
                <td>{{ $user->profile->surname ?? '-' }}</td>
                <td>{{ $user->profile->email ?? '-' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>