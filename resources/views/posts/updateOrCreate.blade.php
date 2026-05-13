<!DOCTYPE html>
<html>
<head>
    <title>UpdateOrCreate</title>
</head>
<body>
    <h1>UpdateOrCreate - обновить или создать статью</h1>
    
    <form action="" method="POST">
        <p>ID (если есть - обновит, если нет - создаст):</p>
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
        <input name="submit" type="submit" value="Обновить или создать">
    </form>
    
    <a href="/post/all">Назад к списку</a>
</body>
</html>