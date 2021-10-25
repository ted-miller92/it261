
<html>
    <head>
        <title>My Adder Assignment</title>
        <style>
        </style>
    </head>
<body>
    <h1>Adder.php</h1> 
    <form action="" method="post">
        <label>Enter the first number:</label>
        <input type="text" name="num1"><br>
        <label>Enter the second number:</label>
        <input type="text" name="num2"><br>
        <input type="submit" value="Add Em!!">
    </form>
    <?php //adder-wrong.php

        if (isset($_POST['num1'])){
            $num1 = intval($_POST['num1']);
            $num2 = intval($_POST['num2']);
            $myTotal = $num1 + $num2;
            echo '<h2>You added '.$num1.' and '.$num2.'</h2>';
            echo '<p style="color:red;">and the answer is<br>'.$myTotal.'!</p>';
            echo'<p><a href="">Reset page</a></p>';
    };
    ?>

<!--here are my errors-->
<!-- line 22: mistyped assignment, was "-=", changed to "="-->
<!-- line 22: num2 was mistyped as Num2-->
<!-- line 23: embedded variables incorrectly -->
<!-- line 24: moved inline styles to <p> tag -->
<!-- line 24: corrected embedded variable -->
<!-- line 24: removed unnecessary line break in document formatting, left the <br> tag -->
<!-- line 25: missing semi-colon -->
<!-- line 25: missing closing <p> tag -->
<!-- line 27: missing closing php tag-->
<!-- HTML: organized and added appropriate indentation to make it actually legible-->
<!-- Opening form tag had unnecessary escape character-->
<!-- submit input element had misplaced closing brace-->
<!-- input name attribute for num1 had mistyped as Num1-->
<!-- missing opening/closing label tags for both number inputs-->
<!-- this crazy thing: ';{?> was at the end of the document -->

<!-- a major reason for the logic not working was that the form had no method attribute. I assigned it the "post" method.-->
<!-- also moved the php block to after the form to match the assignment-->

<!-- there was also a missing closing h2 tag-->

</body>
</html>