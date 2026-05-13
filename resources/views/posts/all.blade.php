<!DOCTYPE html>
<html>
<head>
    <title>Список статей</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .post {
            border: 1px solid #ddd;
            margin: 10px 0;
            padding: 10px;
            border-radius: 5px;
        }
        .btn-add {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 3px;
            margin-bottom: 20px;
        }
        .btn-change {
            display: inline-block;
            background-color: #2196F3;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 3px;
            margin-bottom: 20px;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <h1>Список статей</h1>
    
    <a href="/post/new" class="btn-add">+ Добавить новую статью</a>
    <a href="/post/change-first" class="btn-change">Изменить статью с id=1</a>
    
    @foreach ($posts as $post)
        <div class="post">
            <strong>ID: {{ $post->id }}</strong>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->desc }}</p>
            <small>Дата: {{ $post->date }}</small>
        </div>
    @endforeach
</body>
</html>