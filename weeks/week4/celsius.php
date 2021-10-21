<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="css/styles.css" type="text/css" rel="stylesheet">

    </head>
    <body>
        <form action=
        "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" 
        method="post">
            <fieldset>
                <legend>
                    Our Celsius Form
                </legend>
                <label for="cel">Enter Celsius Value:</label>
                <input type="number" name="cel">
                <input type="submit" value="Convert">
                <p><a href="">Reset</a></p>
            </fieldset>
        </form>

        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['cel'])){
                $cel = $_POST['cel'];
                $cel_int = intval($cel);
                $far = round(($cel_int * 9/5) + 32);
                if($cel == NULL){
                    echo '<h3>Please enter the celsius value</h3>';
                }elseif($far <= 32){
                    echo '<h2>It is '.$far.' degrees and it is pretty cold!</h2>';
                }elseif($far <= 40){
                    echo '<h2>It is '.$far.' degrees and it is not quite as cold</h2>';
                }elseif($far<=50){
                    echo '<h2>It is '.$far.' degrees and it is getting warmer</h2>';
                }elseif($far <=60){
                    echo '<h2>It is '.$far.' degrees and I think I will skip the jacket today</h2>';
                }elseif($far <=70){
                    echo '<h2>It is '.$far.' degrees and I will wear shorts today</h2>';
                }elseif($far <=80){
                    echo '<h2>It is '.$far.' degrees and I am going swimming</h2>';
                }elseif($far <95){
                    echo '<h2>It is '.$far.' damn degrees out and I need to find a pool</h2>';
                }else{
                    echo '<h2>It is '.$far.' degrees out and these are the end times!</h2>';
                }
            } //end isset
        }//end server post
        ?>
    </body>
</html>