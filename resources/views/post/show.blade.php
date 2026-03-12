<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @foreach ($arr as $elem)
        {{ $loop->count }}
        {{ $elem }}
    @endforeach
</body>
</html>