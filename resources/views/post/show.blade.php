<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <ul>
    @foreach ($arr as $elem)
        <li>{{ $elem}} = {{sqrt($elem)}}</li>
    @endforeach
    </ul>
</body>
</html>