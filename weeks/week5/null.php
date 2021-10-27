<?php
echo '<h2>First Example of "a", ergo, it is FALSE, not NULL</h2><br>';
$a = 0;
echo "a is " . is_null($a) . " <br>";

echo '<h2>Second Example of "b", it is TRUE(1), so indeed b is null</h2><br>';
$b = null;
echo "b is " . is_null($b) . "<br>";

echo '<h2>Third Example of "c", nothing is echoed, so False, c is not null</h2><br>';
$c = "null";
echo "c is " . is_null($c). " <br>";

echo '<h2>Fourth Example of "d", d is TRUE(1), so indeed d is null</h2><br>';
$d = NULL;
echo "d is " . is_null($d). "<br>";

?>