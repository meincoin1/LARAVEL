<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    @if(count($arr)>0)
        <p>Сумма элементов массива: {{array_sum($arr)}}</p>
    @else
        <p>Массив пуст</p>
    @endif
</body>
</html>