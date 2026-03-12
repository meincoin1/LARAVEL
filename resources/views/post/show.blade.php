<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @foreach ($arr as $elem)
        @if($loop->odd)
            нечетная итерация
        @endif

        @if($loop->even)
            четная итерация
        @endif
    @endforeach
</body>
</html>