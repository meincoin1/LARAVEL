<!DOCTYPE html>
<html>
<head>
    <title>Email пользователя</title>
</head>
<body>
    @foreach ($names as $name)
            <ul>{{ $name }}</ul>
    @endforeach
</body>
</html>