<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @forelse($users as $user)
        <p>{{ $user }}</p>
    @empty
        <p>В массиве нет элементов</p>
    @endforelse
</body>
</html>