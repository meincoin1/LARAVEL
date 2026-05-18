<!DOCTYPE html>
<html>
<head>
    <title>Удаленные статьи</title>
    <style>
        .deleted-post {
            background: #fff3f3;
            border-left: 4px solid #ff6b6b;
            padding: 15px;
            margin-bottom: 20px;
        }
        .success {
            background: #d4edda;
            color: #155724;
            padding: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Корзина - удаленные статьи</h1>
    
    <!-- Задача 27.6 - вывод флеш-сообщения -->
    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif
    
    <a href="/post/all">← Назад к списку статей</a>
    
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="deleted-post">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->desc }}</p>
                <small>Дата публикации: {{ $post->date }}</small>
                <br>
                <small style="color: red;">Удалена: {{ $post->deleted_at }}</small>
                <br><br>
                <!-- Задача 27.6 - ссылка на восстановление статьи -->
                <a href="/post/restore/{{ $post->id }}" onclick="return confirm('Восстановить статью «{{ $post->title }}»?')">
                    🔄 Восстановить
                </a>
            </div>
        @endforeach
    @else
        <p>Корзина пуста. Нет удаленных статей.</p>
    @endif
</body>
</html>