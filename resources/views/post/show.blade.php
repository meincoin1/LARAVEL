<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @if (is_array($data))
        <ul>
            @foreach ($data as $number)
                <li>{{ $number}}</li>
            @endforeach
        </ul>
        @else
            <p>{{ $data }}</p>
    @endif
</body>
</html>