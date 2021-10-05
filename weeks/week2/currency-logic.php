<?php
// understand the logic
// 1 ruble = 0.013 dollars
// 1lb sterling = 1.28 dollars AM
// 1 CAD = 0.79 dollars
// 1 euro = 1.18 dollar
// 1 yen = 0.0094 dollars

// rubles = 10007
// sterling = 500
// canada = 5000
// euro = 1200
// yen = 2000

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Currency Logic</title>
    <style>
        table{
            width:400px;
            margin:20px auto;
            border:1px solid green;
            border-collapse:collapse;
        }
        td, th{
            border:1px solid green;
            padding:5px;
            text-align:left;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <th>Rubles</th>
            <td>$130.09</td>
        </tr>
        <tr>
            <th>Pounds Sterling</th>
            <td>$640</td>
        </tr>
        <tr>
            <th>Canadian</th>
            <td>$3950</td>
        </tr>
        <tr>
            <th>Euros</th>
            <td>$1416</td>
        </tr>
        <tr>
            <th>Yen</th>
            <td>$18.8</td>
        </tr>
        <tr>
            <th>Total</th>
            <td>$6154.89</td>
        </tr>
    </table>
</body>

</html>