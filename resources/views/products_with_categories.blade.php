<!DOCTYPE html>
<html>
<head>
    <title>Товары и категории</title>
</head>
<body>
    <h1>Товары с категориями</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr><th>ID</th><th>Название</th><th>Цена</th><th>Категории</th></tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }} $</td>
                <td>
                    @foreach($product->categories as $category)
                        {{ $category->name }}{{ !$loop->last ? ', ' : '' }}
                    @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>