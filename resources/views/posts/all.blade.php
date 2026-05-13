<!DOCTYPE html>
<html>
<head>
    <title>Список статей</title>
</head>
<body>
    <h1>Список статей</h1>
    
    @if(session('success'))
        <div style="background: green; color: white; padding: 10px;">
            {{ session('success') }}
        </div>
    @endif
    
    <a href="/post/new">Добавить статью</a>
    <a href="/post/change-first">Изменить статью с id=1</a>
    <a href="/post/mass-update">Массовое обновление</a>
    <a href="/post/first-or-create">FirstOrCreate</a>
    <a href="/post/update-or-create">UpdateOrCreate</a>
    
    @foreach ($posts as $post)
        <div>
            <h3>{{ $post->title }}</h3>
            <p>{{ $post->desc }}</p>
            <small>Дата: {{ $post->date }}</small>
            <br>
            <a href="/post/edit/{{ $post->id }}">Редактировать</a>
        </div>
        <hr>
    @endforeach
</body>
</html>