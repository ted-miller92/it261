<?php

$wines = array(
    'cab',
    'merlot',
    'malbec',
    'syrah',
    'red'
);

// echo $wines;

$my_wines = implode(' ', $wines); // this function takes all elements of an array, squishes them together into a string, separated by the first argument
echo $my_wines;

?>