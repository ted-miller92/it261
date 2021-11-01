<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/calculatorStyle.css">
    </head>
    <body>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <fieldset>
                <label for="name">Enter your name</label>
                <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

                <label for="miles">How many miles will you drive?</label>
                <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>">

                <label for="dailyHours">How many hours per day will you drive?</label>
                <input type="number" name="dailyHours" value="<?php if(isset($_POST['dailyHours'])) echo $_POST['dailyHours'] ;?>">

                <label for="price">Price of a gallon of gas:</label>
                <ul>
                    <li><input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == '3.00') echo 'checked="checked"';?>>$3.00</li>
                    <li><input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == '3.50') echo 'checked="checked"';?>>$3.50</li>
                    <li><input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] == '4.00') echo 'checked="checked"';?>>$4.00</li>
                </ul>

                <label for="mpg">Fuel efficiency (mpg):</label>
                <select name="mpg">
                    <option value="" NULL<?php if(isset($_POST['mpg']) && $_POST['mpg'] == NULL) echo 'selected="unselected"';?>>Select your fuel efficiency</option>
                    <option value="12" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '12') echo 'selected="selected"';?> >12 mpg</option>
                    <option value="19" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '19') echo 'selected="selected"';?>>19 mpg</option>
                    <option value="25" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '25') echo 'selected="selected"';?>>25 mpg</option>
                    <option value="35" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '35') echo 'selected="selected"';?>>35 mpg</option>
                </select>

                <label for="avgSpeed">How fast (mph) will you drive on average?</label>
                <select name="avgSpeed">
                    <option value="" NULL <?php if(isset($_POST['avgSpeed']) && $_POST['avgSpeed'] == NULL) echo 'selected="unselected"';?>>Select your driving style</option>
                    <option value="60" <?php if(isset($_POST['avgSpeed']) && $_POST['avgSpeed'] == '60') echo 'selected="selected"';?>>60mph</option>
                    <option value="70" <?php if(isset($_POST['avgSpeed']) && $_POST['avgSpeed'] == '70') echo 'selected="selected"';?>>70mph</option>
                    <option value="80" <?php if(isset($_POST['avgSpeed']) && $_POST['avgSpeed'] == '80') echo 'selected="selected"';?>>80mph</option>
                    <option value="90" <?php if(isset($_POST['avgSpeed']) && $_POST['avgSpeed'] == '90') echo 'selected="selected"';?>>90mph</option>
                </select>

                <input type="submit" value="Calculate">

            </fieldset> 
        </form>
        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $error_status = FALSE;
            if(empty($_POST['name'])){
                echo '<div class="errorBox">
                    <h2>Please enter your name</h2>
                    </div>';
                    $error_status = TRUE;
            }
            if(empty($_POST['miles'])){
                echo '<div class="errorBox">
                    <h2>Please enter the number of miles you will travel</h2>
                    </div>';
                    $error_status = TRUE;
            }
            if(empty($_POST['dailyHours'])){
                echo '<div class="errorBox">
                    <h2>Please enter the the time you will be driving</h2>
                    </div>';
                    $error_status = TRUE;
            }
            if(empty($_POST['price'])){
                echo '<div class="errorBox">
                    <h2>Please enter the price of a gallon of gas</h2>
                    </div>';
                    $error_status = TRUE;
            }
            if($_POST['mpg'] == NULL){
                echo '<div class="errorBox">
                    <h2>Please select the fuel efficiency</h2>
                    </div>';
                    $error_status = TRUE;
            }
            if($_POST['avgSpeed'] == NULL){
                echo '<div class="errorBox">
                    <h2>Please tell us how fast you will drive</h2>
                    <p>(we won\'t be sharing this information with the state patrol)</p>
                    </div>';
                    $error_status = TRUE;
            }
            if(isset($_POST['name'],
                    $_POST['miles'],
                    $_POST['dailyHours'],
                    $_POST['price'],
                    $_POST['mpg'] ,
                    $_POST['avgSpeed']       
                )){
                    $name = $_POST['name'];
                    $miles = intval($_POST['miles']);
                    $dailyHours = intval($_POST['dailyHours']);
                    $price = intval($_POST['price']);
                    $mpg = intval($_POST['mpg']);
                    $avgSpeed = intval($_POST['avgSpeed']);
                    
                    if ($mpg == 0){
                        $mpg = 1;
                    }
                    $totalCost = number_format(($miles / $mpg * $price), 2);

                    if ($dailyHours ==0){
                        $dailyHours = 1;
                    }
                    $totalMinutes = intval(60 * ($miles / $avgSpeed));
                    $totalHours = floor($totalMinutes/ 60);
                    $remainderMinutes = $totalMinutes%60;

                    if ($avgSpeed == 0){
                        $avgSpeed = 1;
                    }
                    $totalDays = ceil(($miles / $avgSpeed) / $dailyHours);

                    if($error_status == FALSE){
                        echo    '<div class="box">
                                    <h2>Hello, '.$name.'</h2>
                                    <p>Here is some important information about your trip:</p>
                                    <table>
                                        <tr><td>Total cost of fuel:</td> <td>$'.$totalCost.'</td></tr>
                                        <tr><td>Total minutes driving: </td><td>'.$totalMinutes.' minutes</td></td>
                                        <tr><td>Total time:</td><td> '.$totalHours.' hours, '.$remainderMinutes.' minutes</td></tr>
                                        <tr><td>Total days required:</td><td>'.$totalDays.'</td></tr>
                                    </table>
                                </div>';
                    }
                }
        }
        ?>
    </body>
</html>