{{-- 
    Задача 25.5
--}}

<!DOCTYPE html>
<html>
<head>
    <title>{{ $post->title }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background: #f5f5f5;
        }
        .article {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            border-bottom: 3px solid #4CAF50;
            padding-bottom: 10px;
            margin-top: 0;
        }
        .desc {
            font-style: italic;
            color: #666;
            background: #f9f9f9;
            padding: 15px;
            margin: 20px 0;
            border-left: 4px solid #4CAF50;
        }
        .text {
            line-height: 1.8;
            margin: 20px 0;
            color: #333;
        }
        .date {
            color: #999;
            font-size: 14px;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #eee;
        }
        .back-link {
            display: block;
            margin-top: 30px;
            text-align: center;
        }
        .back-link a {
            color: #4CAF50;
            text-decoration: none;
            padding: 10px 20px;
            background: #f0f0f0;
            border-radius: 5px;
        }
        .back-link a:hover {
            background: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <div class="article">
        <h1>{{ $post->title }}</h1>
        <div class="desc">{{ $post->desc }}</div>
        <div class="text">{{ $post->text }}</div>
        <div class="date">Дата публикации: {{ $post->date }}</div>
        <div class="back-link">
            <a href="/post/all">← Вернуться к списку статей</a>
        </div>
    </div>
</body>
</html>