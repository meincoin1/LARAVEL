<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @forelse ($arr as $elem)
        <p>{{ $elem }}</p>
    @empty
        <p>в массиве нет элементов</p>
    @endforelse
</body>
</html>