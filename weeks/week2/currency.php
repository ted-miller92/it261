<?php
// understand the logic
// 1 ruble = 0.013 dollars
// 1lb sterling = 1.28 dollars AM
// 1 CAD = 0.79 dollars
// 1 euro = 1.18 dollar
// 1 yen = 0.0094 dollars

$rubles = 10007;
$rubles *= 0.013;
$friendly_rubles = number_format($rubles, 2);

$sterling = 500;
$sterling *= 1.28;
$friendly_sterling = number_format($sterling, 2);

$canada = 5000;
$canada *= 0.79;
$friendly_canada = number_format($canada, 2);

$euro = 1200;
$euro *= 1.18;
$friendly_euro = number_format($euro, 2);

$yen = 2000;
$yen *= 0.0094;
$friendly_yen = number_format($yen, 2);

$total = number_format($rubles + $sterling + $canada + $euro + $yen, 2);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Currency</title>
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
            <td><?php echo '$'.$friendly_rubles.'' ; ?></td>
        </tr>
        <tr>
            <th>Pounds Sterling</th>
            <td><?php echo '$'.$friendly_sterling.'' ; ?></td>
        </tr>
        <tr>
            <th>Canadian</th>
            <td><?php echo '$'.$friendly_canada.'' ; ?></td>
        </tr>
        <tr>
            <th>Euros</th>
            <td><?php echo '$'.$friendly_euro.'' ; ?></td>
        </tr>
        <tr>
            <th>Yen</th>
            <td><?php echo '$'.$friendly_yen.'' ; ?></td>
        </tr>
        <tr>
            <th>Total</th>
            <td><?php echo '$'.$total.'' ; ?></td>
        </tr>
    </table>
    <h2>PHP work shown</h2>
    <p>I've determined a rather archaic but sure way of showing the PHP script that resulted in the above. I just replace the "<" and ">" symbols with &amp;lt; and &amp;gt;, respectively. This intentionally unsuccessfuly processes the PHP opening and closing tags.</p>
    <pre>
    &lt;?php
        // understand the logic
        // 1 ruble = 0.013 dollars
        // 1lb sterling = 1.28 dollars AM
        // 1 CAD = 0.79 dollars
        // 1 euro = 1.18 dollar
        // 1 yen = 0.0094 dollars

        $rubles = 10007;
        $rubles *= 0.013;
        $friendly_rubles = number_format($rubles, 2);

        $sterling = 500;
        $sterling *= 1.28;
        $friendly_sterling = number_format($sterling, 2);

        $canada = 5000;
        $canada *= 0.79;
        $friendly_canada = number_format($canada, 2);

        $euro = 1200;
        $euro *= 1.18;
        $friendly_euro = number_format($euro, 2);

        $yen = 2000;
        $yen *= 0.0094;
        $friendly_yen = number_format($yen, 2);

        $total = number_format($rubles + $sterling + $canada + $euro + $yen, 2);

    ?&gt;
    <table>
        <tr>
            <th>Rubles</th>
            <td>&lt;?php echo '$'.$friendly_rubles.'' ; ?&gt;</td>
        </tr>
        <tr>
            <th>Pounds Sterling</th>
            <td>&lt;?php echo '$'.$friendly_sterling.'' ; ?&gt;</td>
        </tr>
        <tr>
            <th>Canadian</th>
            <td>&lt;?php echo '$'.$friendly_canada.'' ; ?&gt;</td>
        </tr>
        <tr>
            <th>Euros</th>
            <td>&lt;?php echo '$'.$friendly_euro.'' ; ?&gt;</td>
        </tr>
        <tr>
            <th>Yen</th>
            <td>&lt;?php echo '$'.$friendly_yen.'' ; ?&gt;</td>
        </tr>
        <tr>
            <th>Total</th>
            <td>&lt;?php echo '$'.$total.'' ; ?&gt;</td>
        </tr>
    </table>
    </pre>
</body>

</html>