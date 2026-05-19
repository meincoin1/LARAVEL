<!DOCTYPE html>
<html>
<head>
    <title>Категории и товары</title>
</head>
<body>
    <h1>Категории с товарами</h1>
    @foreach($categories as $category)
    <div>
        <h2>{{ $category->name }}</h2>
        <ul>
            @foreach($category->products as $product)
            <li>{{ $product->name }} - {{ $product->price }} $</li>
            @endforeach
        </ul>
        <p>Всего товаров: {{ $category->products->count() }}</p>
    </div>
    <hr>
    @endforeach
</body>
</html>