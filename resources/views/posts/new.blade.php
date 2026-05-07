<!DOCTYPE html>
<html>
<head>
    <title>Новая статья</title>
</head>
<body>
    <h1>Добавление статьи</h1>
    <form action="/post/new" method="POST">
        <p>Заголовок: <input type="text" name="title" required></p>
        <p>Описание: <input type="text" name="desc" required></p>
        <p>Дата: <input type="date" name="date" required></p>
        <p>Текст: <textarea name="text" rows="5" required></textarea></p>
        <button type="submit" name="submit">Сохранить</button>
    </form>
    <a href="/post/all">Назад</a>
</body>
</html>