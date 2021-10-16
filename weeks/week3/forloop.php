<?php

// for loops
// tricky!

for ($x = 0; $x <= 21; $x += 3) {
    echo 'The number is: '.$x.'<br>';
}



// for loop for our ceslsius f converter

//do not call celsius variable outside of loop

for ($c = 0; $c <= 100; $c++){
    $far = floor(($c * 9/5 + 32));
    echo '<b> Farenheit:  </b>'.$far.' <b> Celsius: </b> '.$c.'<br>';
}
echo '<br>';


// Kilometer to miles conversion

for ($km = 0; $km <=100; $km+=10){
    $mi = floor(($km/1.60934));
    echo '<b> Kilometers: </b> '.$km.' <b>Miles: </b><span style="color:green"> '.$mi.' </span><br>';
}

?>