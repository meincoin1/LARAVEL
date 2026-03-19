<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <ul>
        @foreach ($string as $str)
            
            <li> {{ $loop->index }} {{ $str }}</li>
        @endforeach
    </ul>
</body>
</html>