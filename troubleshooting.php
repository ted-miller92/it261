<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> 
<form action="">
    <label for="num1">Enter the first number:</label>
    <input type="text" name="Num1">
    <br>
    </label for="num2">Enter the second number:</label>
    <input type="text" name="num2"><br>
    <input type="submit" value="Add Em!!">
</form>

<?php//adder-wrong.php

if (isset($_POST['num1'])){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$myTotal += $num1 + $Num2;
echo '<h2>You added '.$num1.' and '.$num2.'</h2>';
echo '<p style="color:red;">and the answer is <br>'.$myTotal .'!</p>';    
echo '<p><a href="">Reset page</a>';
}
?>

<!--ERRORS LISTED-->
<!-- Major error found: no closing php tag. Added this tag immediately above opening html tag-->
<!-- error line 6: fixed "-=" to be "+=" --> 
<!-- error line 7: double quotes should be single quotes to embed php variable -->
<!-- error line 7: No closing h2 tag. Added closing h2 tag -->
<!-- error line 8: no semi-colon at the end of statement, also no closing single quote for echo statement -->
<!-- the formatting is all really awful. line breaks added everywhere to help organize document -->
<!-- a number of missing elements, like opening label tags, closing label tags, closing quotation marks, etc-->
<!-- Also many unnecessary elements like an escape character right at the beginning of the form-->
<!-- So so so many errors in the three echo statements in the if(isset) conditional-->
<!-- label for num1 was Num1, corrected to num1-->
<!--maybe all the php should be underneath the form in html -->


</body>
</html>';{?>
<!-- error line 6: fixed "-=" to be "+=" -->