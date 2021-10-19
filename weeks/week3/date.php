<?php

echo date("l jS \of F Y h:i:s A");
echo '<br>';
echo date("H:i");
date_default_timezone_set('America/Los_Angeles');
echo '<br>';
echo 'America LA time: '.date("H:i").'';


// use an else/elsfeif statement resulting in a message based on the day
// if time < 11 it is morning
// if time < 16 it is afternoon
// else it is evening
// we need to assign time to a variable
$time = date("H:i");
if($time <= 11){
    echo '<h2 style="color:green">Good morning, Ted</h2>';
} elseif($time <= 16){
    echo '<h2 style="color:light-blue">Good afternoon, Ted</h2>';
}else{
    echo '<h2 style="color:orange">Good evening, Ted</h2>';
}

?>