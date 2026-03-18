<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @if ($age >= 18)
        ура вам есть больше 18!!!!
    @elseif ($age < 18)
        вы еще не доросли\\
    @endif
</body>
</html>