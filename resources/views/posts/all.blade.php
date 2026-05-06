<!DOCTYPE html>
<html>
<head>
    <title>Все статьи</title>
</head>
<body>
    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
        </div>
    @endforeach
</body>
</html>