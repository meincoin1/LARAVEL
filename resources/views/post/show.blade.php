<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @foreach ($arr as $elem)
        @if($loop->first)
            первая итерация
        @endif

        @if($loop->last)
            последняя итерация
        @endif
    @endforeach
</body>
</html>