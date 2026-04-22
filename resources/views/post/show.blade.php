<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
 @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->text }}</p>
            <p>Лайков: {{ $post->likes }}</p>
        </div>
        <hr>
    @endforeach
</body>
</html>