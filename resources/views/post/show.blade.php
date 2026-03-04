<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @if ($num > 0)
        больше нуля
    @elseif ($num == 0)
        ноль
    @else
        меньше нуля
    @endif
</body>
</html>