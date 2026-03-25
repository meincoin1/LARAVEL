<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
<ul>
    @foreach($numbers as $number)
        @if($number != 0)
            <li>{{ $number }}</li>
        @endif
    @endforeach
</ul>
</body>
</html>