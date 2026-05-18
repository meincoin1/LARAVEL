<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пользователи и города</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: #f5f5f5;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        th {
            background: #2196F3;
            color: white;
            padding: 12px;
            text-align: left;
        }
        td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background: #f5f5f5;
        }
    </style>
</head>
<body>
    <h1>Список пользователей с городами</h1>
    
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Логин</th>
                <th>Город</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->login }}</td>
                <td>{{ $user->city->name ?? 'Не указан' }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" style="text-align: center;">Пользователей не найдено</td>
            </tr>
            @endforelse
        </tbody>
    </table>
    
    <div style="margin-top: 20px; text-align: center; color: #666;">
        <strong>Всего пользователей:</strong> {{ $users->count() }}
    </div>
</body>
</html>