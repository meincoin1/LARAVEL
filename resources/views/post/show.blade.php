<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <!-- Выводим только положительные элементы. Работает
    @foreach ($arr as $elem)
        @if ($elem > 0)
            <li>{{$elem}}</li>
        @endif
    @endforeach -->

    <!-- Список, где кол-во элементов в массиве больше нуля. Работает-->
    @if (count($arr)>0)
        <ul>
            @foreach ($arr as $elem)
                <li>{{ $elem }}</li>
            @endforeach
        <ul>
    @endif
</body>
</html>