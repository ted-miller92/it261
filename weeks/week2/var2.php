<?php
// More on variables, arithmetic and additional set functions

$a = '20';
$b = '30';
$c = $a + $b;
echo $c;
echo '<br>';

$a = '700';
$b = '330';
$c = $a - $b;
echo $c;
echo '<br>';

$a = '50';
$b = '5';
$c = $a * $b;
echo $c;
echo '<br>';

$money = 100;
$money /= 7;
echo $money;
echo '<br>';

$money = 100;
$money /= 7;
$friendly_money = number_format($money, 2);
echo $friendly_money;
echo '<br>';

// floor(); rounds down to nearest whole number
$friendly_money = floor($money);
echo $friendly_money;
echo '<br>';

// ceil(); rounds UP to nearest whole number
$friendly_money = ceil($money);
echo $friendly_money;
echo '<br>';

// circumference of a circle = 2(pi)(r);

$radius = '10';
$pi = 3.14;
$circumference = 2 * $pi * $radius;
echo $circumference;
echo '<br>';

// always think logic first

// converting temperature
// 22 degrees celsius = ? in far?
// far = (C * 9/5) + 32

$celsius = 14;
$friendly_far = floor(($celsius * 9/5) + 32);
echo ''.$celsius.' Degrees C is '.$friendly_far.' F';
echo '<br>';

// exchange rate
// Canadian to US exchange rate = 0.79

$canada = 1422;
$canada *= .79;
$friendly_canada = number_format($canada, 2);
echo '<p>I have <b>$'.$friendly_canada.'</b> American dollars.<p>';

