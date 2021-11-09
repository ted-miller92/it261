<?php //functions

// gathering information from "checkboxes" in forms

function sayHello() {
    echo 'This is my say hello content';
}

sayHello();

echo '<br />';

function sayHello2($name) {
    echo 'Hello '.$name.'';
}

sayHello2('Ted');
echo '<br>';
sayHello2('Jerry');
echo '<br>';

function sayHello3($name, $age){
    echo 'My name is '.$name.' and I am '.$age.' years old';
}

sayHello3('ted', 28);
echo '<br>';
sayHello3('Adam', 56760);
echo '<br>';

function cube($n){
    $cubing = $n * $n * $n;
    echo $cubing;
}

cube(4);

echo '<br>';

function celsius_converter($temp){
    $far = ($temp * 9/5) + 32;
    return $far;
}

$far = celsius_converter(40);

echo  ''.$far.' degrees';
echo '<br>';

function area_volume($x, $y, $z) {
    $area = $x * $y;
    $volume = $area * $z;
    return array($area, $volume);
}

$my_return = area_volume(10, 5, 10);
echo 'Area: '.$my_return[0].' ';
echo '<br>';
echo 'Volume: '.$my_return[1].' ';
echo '<br>';
list($my_area, $my_volume) = area_volume(12, 10, 6);

echo '<b>Area:</b> '.$my_area.'';
echo '<br>';
echo '<b>Volume:</b> '.$my_volume.'';