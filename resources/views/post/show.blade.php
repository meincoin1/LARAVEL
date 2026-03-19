<!DOCTYPE html>
<html>
<head>
    <title>title</title>
    <style>
        .first {
            color: red;
            font-weight: 800;
        }
        .last {
            color: green;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <ul>
        @foreach ($string as $str)
            @php
            $class = '';
            if($loop->first) $class = 'first';
            if($loop->last) $class = 'last';
            @endphp
            <li class = "{{ $class }}">{{ $str }}</li>
        @endforeach
    </ul>
</body>
</html>