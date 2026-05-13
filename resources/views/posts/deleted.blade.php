<!DOCTYPE html>
<html>
<head>
    <title>Удаленные статьи</title>
</head>
<body>
    <h1>Удаленные статьи</h1>
    
    @if(session('success'))
        <div style="background: green; color: white; padding: 10px;">
            {{ session('success') }}
        </div>
    @endif
    
    <a href="/post/all">Назад к списку статей</a>
    
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div style="border: 1px solid #ccc; margin: 10px; padding: 10px;">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->desc }}</p>
                <small>Дата: {{ $post->date }}</small>
                <br>
                <small>Удалена: {{ $post->deleted_at }}</small>
            </div>
        @endforeach
    @else
        <p>Нет удаленных статей</p>
    @endif
</body>
</html>