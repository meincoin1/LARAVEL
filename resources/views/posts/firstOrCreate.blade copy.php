<!DOCTYPE html>
<html>
<head>
    <title>FirstOrCreate</title>
</head>
<body>
    <h1>FirstOrCreate - найти или создать статью</h1>
    
    <form action="" method="POST">
        <p>ID (оставьте пустым для создания новой):</p>
        <input name="id">
        
        <p>Название:</p>
        <input name="title">
        
        <p>Описание:</p>
        <input name="desc">
        
        <p>Дата:</p>
        <input name="date">
        
        <p>Текст:</p>
        <textarea name="text"></textarea>
        
        <br>
        <input name="submit" type="submit" value="Найти или создать">
    </form>
    
    <a href="/post/all">Назад к списку</a>
</body>
</html>