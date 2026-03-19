<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>

    <ul>
    @foreach ($arr as $elem)
        @if($elem % 2 == 0)
            <li>{{ $elem }}</li>
        @endif
    @endforeach
    </ul>
</body>
</html>