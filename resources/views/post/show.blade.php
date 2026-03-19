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
        @foreach ($matrix as $row)
            <tr>
                @foreach ($row as $cell)
                    <td>{{  $cell }}</td>
                @endforeach
            </tr>
        @endforeach
    </table>
</body>
</html>