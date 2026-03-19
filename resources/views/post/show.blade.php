<!DOCTYPE html>
<html>
<head>
    <title>title</title>
    <style>
        table {
            width: 10%;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <table>
        @foreach ($employees as $emplo)
           <tr>
            @foreach ($emplo as $yees)
                 <td>{{  $yees }}</td>
             @endforeach
            </tr>
        @endforeach
    </table>
</body>
</html>