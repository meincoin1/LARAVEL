<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <!-- Перебераем массив циклом. Работает -->
    <!-- @foreach ($arr as $elem)
        {{$elem}}
    @endforeach -->

    <!-- Выводим каждый элемент массива в отдельном абзаце. Работает -->
    <!-- @foreach ($arr as $elem)
        <p>{{$elem}}</p>
    @endforeach -->

    <!-- Выведем элементы массива в виде списка. Работает-->
     @foreach ($arr as $elem)
        <li>{{$elem}}</li>
    @endforeach
</body>
</html>