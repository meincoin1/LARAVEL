<!DOCTYPE html>
<html>
<head>
    <title>Редактирование статьи</title>
</head>
<body>
    <h1>Редактирование статьи</h1>
    
    <form action="" method="POST">
        
        <p>Название статьи:</p>
        <input name="title" value="{{ $post->title }}">
        
        <p>Описание:</p>
        <input name="desc" value="{{ $post->desc }}">
        
        <p>Дата:</p>
        <input name="date" value="{{ $post->date }}">
        
        <p>Текст статьи:</p>
        <textarea name="text">{{ $post->text }}</textarea>
        
        <br>
        <input name="submit" type="submit" value="Сохранить изменения">
    </form>
</body>
</html>