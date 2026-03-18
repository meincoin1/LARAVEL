<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @if ($age >= 18)
        вы авторизованы
    @elseif ($age < 18)
        вы не авторизованы
    @endif
</body>
</html>