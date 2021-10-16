<?php 
// the if statement
// LOGIC - if the temp is less than 90 degrees, all is well, else it's going to be a cooker

$temp = 91;

if($temp <= 90) {
    echo 'Not that hot';
} else {
    echo 'It\'s a scorcher';
}

echo '<br>';

//we are going to extend the if statement with an ifelse

$temp = 86;
if($temp <= 78) {
    echo 'It is livable';
} elseif($temp <= 85) {
    echo 'It\'s getting hotter';
} else {
    echo 'It\'s really hot';
}
echo '<br>';
// fun with logic
// LOGIC - if my sales are over $800,000, I will make 10% bonus of base salary
// if sales are greater than or equal to $600,000, I will make a bonus of 5%
// anything else, no bonus

$sales = 700000;
$salary =  200000;
echo 'Salary is ';
if($sales >= 800000){
    $salary *= 1.10;
    echo $salary;
} elseif($sales >= 600000) {
    $salary *= 1.05;
    echo $salary;
} else {
    $salary *= 1;
    echo $salary;
}