<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <ul>
    @foreach ($animals as $key => $value)
        <li>{{ $key}}: {{$value}}</li>
    @endforeach
    </ul>
</body>
</html>