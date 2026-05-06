<!DOCTYPE html>
<html>
<head>
    <title>Все статьи</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .sort-links {
            margin: 20px 0;
            text-align: center;
        }
        .sort-links a {
            margin: 0 10px;
            padding: 5px 10px;
            background: #4CAF50;
            color: white;
            border-radius: 3px;
            display: inline-block;
        }
        .sort-links a:hover {
            background: #45a049;
        }
        .current-sort {
            margin: 10px 0;
            text-align: center;
            color: #666;
        }
    </style>
</head>
<body>
    <h1>Список статей</h1>
    
    {{-- Задача 25.8 и 25.9: Ссылки для сортировки --}}
    <div class="sort-links"
        <strong>Сортировка по полю:</strong>
        <a href="/post/all/id/desc">По ID (убыв)</a>
        <a href="/post/all/title/desc">По заголовку (убыв)</a>
        <a href="/post/all/date/desc">По дате (убыв)</a>
        |
        <strong>Направление:</strong>
        <a href="/post/all/{{ $order }}/asc">По возрастанию ↑</a>
        <a href="/post/all/{{ $order }}/desc">По убыванию ↓</a>
    </div>
    
    <div class="current-sort">
        Текущая сортировка: по полю <strong>{{ $order }}</strong> 
        в направлении <strong>{{ $dir === 'asc' ? 'возрастания ↑' : 'убывания ↓' }}</strong>
    </div>
    
    {{-- Задача 25.3: HTML таблица со статьями --}}
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Описание</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                {{-- Задача 25.6: Заголовок как ссылка на страницу статьи --}}
                <td><a href="/post/{{ $post->id }}">{{ $post->title }}</a></td>
                <td>{{ $post->desc }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>