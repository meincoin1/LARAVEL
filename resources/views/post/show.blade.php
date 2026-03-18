<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @if ($age = 18)
        ура вам есть 18!
    @elseif ($age > 18)
        вам больше 18
    @elseif ($age < 18)
        вам меньше 18
    @endif
</body>
</html>