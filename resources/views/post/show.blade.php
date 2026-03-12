<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @foreach ($arr as $elem)
        {{ $loop->index }}
        {{ $elem }}
    @endforeach
</body>
</html>