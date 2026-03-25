<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
@php
    $stop = false;
@endphp

@foreach($numbers as $number)
    @if($number == 0 || $stop)
        @php $stop = true; @endphp
    @else
        {{ $number }}<br>
    @endif
@endforeach
</body>
</html>