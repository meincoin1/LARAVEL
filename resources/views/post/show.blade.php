<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <ul>
    @foreach ($animals as $key => $elem)
        <li>{{$key + 1}}: {{$elem}}</li>
    @endforeach
    </ul>
</body>
</html>