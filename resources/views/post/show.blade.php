<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @foreach ($arr as $elem)
        {{ $elem }}

        @if ($elem == 3)
            @continue
        @endif
    @endforeach
</body>
</html>