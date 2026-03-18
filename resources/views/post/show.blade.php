<!DOCTYPE html>
<html>
<head>
    <title>title</title>
</head>
<body>
    <p>Год: {{ !empty($year) ? $year: date('Y')}}</p>
    <p>Месяц: {{ !empty($month) ? $month: date('m')}}</p>
    <p>День: {{ !empty($day) ? $day: date('d')}}</p>
</body>
</html>