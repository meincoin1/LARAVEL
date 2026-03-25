<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
  @foreach($numbers as $number)
        @if($loop->index >= count($numbers) - 3)
            <i><b>{{ $number }}</b></i><br>
        @else
            <b>{{ $number }}</b><br>
        @endif
    @endforeach
</body>
</html>