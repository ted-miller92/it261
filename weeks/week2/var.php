<?php
// this will be an introduction to variables 
// var.php
// a variable is a container for information

$name = 'Ted';

// variables are initiated with the $ sign and assigned with the = sign
// statements are ended with the ; symbol
// single quotes infers that the assignment is a string

$weather = 'It is a sunny day';

$body_temp = 98.6;
// integers do not have quotes around it
// technically, 98.6 is a float because of the decimal point

echo $name;
echo '<br>';
echo 'My name is $name';
// if you use single quotes around a vriable, the value of that variable will not be displayed
echo '<br>';
echo "My name is $name";
// use double quotes to call the variable value
echo '<br>';
echo 'My name is '.$name.' ';
// surround the variable in its own single quotes and periods to also call the variable value
echo '<br>';
echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The average temperature is '.$body_temp.' and all is well.';
echo '<br>';
$name = 'Karen';
echo $name;
echo '<br>';
$x = 20;
$y = 5;

echo $x;
echo '<br>';
$z = $x + $y;
echo $z;
$z = $x * $y;
echo '<br>';
echo $z;
echo '<br>';
// continuing with names

$first_name = 'Ted';
$last_name = 'Miller';

echo $first_name.' '.$last_name;
echo '<br>';
echo ' '.$first_name.' '.$last_name.' ';
echo '<br>';
echo 'Here are the names with a single quote: '.$first_name.' '.$last_name.' ';
// As we can see, when using single quotes, the variable must be nested within '.$variable.'
echo '<br>';

echo "Here are the names with double quotes: $first_name $last_name";
// If using an apostrophe, you must use the ESCAPE character directly before the apostrophe \

$name = 'Ted';
$name = 'Miller';

echo '<br>';

echo $name;
// This returns 'Miller' because the variable has been reassigned

// If we want to concatenate, place a period directly before the assignment ".="

$name = 'Ted';
$name .= ' Miller';

echo '<br>';
echo $name;
// the preceding will return "Ted Miller";

$x = 20;
$x *= 2;
//The preceding will multiply 20*2;
echo '<br>';
echo $x;

$y = 20;
$y /= 2;
//The preceding will divide 20/2;
echo '<br>';
echo $y;

// our first function - number_format()

echo '<br>';
$x = 137;
$x /= 4;
$friendly_x = number_format($x, 0);
echo $x;
echo '<br>';
echo $friendly_x;

echo '<br>';
// our second preset function - the date function
echo date('Y');
echo '<br>';
echo date('l');
echo '<br>';
// arrays
$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'grapes';
$fruit[] = 'apples';
echo '<br>';
// CANNOT echo an array
// echo $fruit[i] will work to return the ith element;
echo $fruit[2]; 
echo '<br>';
// we can also use the print_r() function
$fruit = array(
    'orange', 
    'banana',
    'grapes',
    'apples',
    'cherries',
    'strawberries'
);
// echo $fruit[];
print_r($fruit);
echo '<br>';
// pass the index value to get one of the array elements
print_r($fruit[2]);
echo '<br>';
// You can also use var_dump() to return the array
// This shows the numbers of characters in each element
// basically shows more information about the array
var_dump($fruit);

// a typical array in the world of websites, a navigation list
echo '<br>';
$nav = array(
    'Home',
    'About',
    'Daily',
    'Contact',
    'Gallery'
);
echo $nav[0];
echo '<br>';
print_r($nav);

$nav['index.php']= 'Home';
$nav['about.php']= 'About';
$nav['daily.php']= 'Daily';
$nav['contact.php']= 'Contact';
$nav['gallery.php']= 'Gallery';

// the following show key/value pairs, where 'index.php' is the KEY, 'Home' is the VALUE
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo '<br>';
echo '<pre>';
var_dump($nav);
echo '</pre>';

echo '<br>';

$show = 'The Crown';
$show_actor = 'Olivia Colman';
$show_genre = 'Historical Fiction';

echo 'My favorite series during 2020 was "'.$show.'", starring '.$show_actor.', and it is a '.$show_genre.'';