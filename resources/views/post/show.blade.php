<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <ul>
        @foreach ($string as $str)
            
            <li> {{ $loop->iteration}} {{ $str }}</li>
        @endforeach
    </ul>
</body>
</html>