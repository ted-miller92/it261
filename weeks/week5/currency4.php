<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Currency 4 - Extra Credit</title>
        <link href="css/styles.css" type="text/css" rel="stylesheet">

    </head>
    <body>
        <h1>Currency Converter Tool</h1>

        <form action="
        <?php
            $currentURL = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
            echo htmlspecialchars($_SERVER['PHP_SELF']);
        ?>
        " method="post">
        <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

            <label for="email">Email</label>
            <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

            <label for="amount">How much money do you have?</label>
            <input type="number" name="amount" value="<?php if(isset($_POST['amount'])) echo htmlspecialchars($_POST['amount']) ;?>">

            <label for="exchange">Choose your exchange rate</label>
            <ul>
                <li><input type="radio" name="exchange" value="0.013" <?php if(isset($_POST['exchange']) && $_POST['exchange'] == '0.013') echo 'checked="checked"';?>>Rubles</li>
                <li><input type="radio" name="exchange" value="0.76" <?php if(isset($_POST['exchange']) && $_POST['exchange'] == '0.76') echo 'checked="checked"';?>>Canadian</li>
                <li><input type="radio" name="exchange" value="1.28" <?php if(isset($_POST['exchange']) && $_POST['exchange'] == '1.28') echo 'checked="checked"';?>>Pounds</li>
                <li><input type="radio" name="exchange" value="1.18" <?php if(isset($_POST['exchange']) && $_POST['exchange'] == '1.18') echo 'checked="checked"';?>>Euros</li>
                <li><input type="radio" name="exchange" value="0.0094" <?php if(isset($_POST['exchange']) && $_POST['exchange'] == '0.0094') echo 'checked="checked"';?>>Yen</li>
            </ul>
            
            <label for="bank">Choose your banking institution</label>
            <select name="bank">
                <option value="" NULL<?php if(isset($_POST['bank']) && $_POST['bank'] == NULL) echo 'selected="unselected"';?>>Select one</option>
                <option value="BOA" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'BOA') echo 'selected="selected"';?>>Bank of America</option>
                <option value="key"<?php if(isset($_POST['bank']) && $_POST['bank'] == 'key') echo 'selected="selected"';?>>Key Bank</option>
                <option value="chase" <?php if(isset($_POST['bank']) && $_POST['bank'] == 'chase') echo 'selected="selected"';?>>Chase</option>
                <option value="BECU"<?php if(isset($_POST['bank']) && $_POST['bank'] == 'BECU') echo 'selected="selected"';?>>BECU</option>
                <option value="mattress"<?php if(isset($_POST['bank']) && $_POST['bank'] == 'mattress') echo 'selected="selected"';?>>Mattress</option>
            </select>
            <input type="submit" value="Convert">

            <p><a href="">Reset</a></p>

        </fieldset>


            
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(empty($_POST['name'])){
                    echo    '<div class="errorBox">
                                <h2>Please enter your name</h2>
                            </div>';
                }
                if(empty($_POST['email'])){
                    echo    '<div class="errorBox">
                                <h2>Please enter your email</h2>
                            </div>';
                }
                if(empty($_POST['amount'])){
                    echo    '<div class="errorBox">
                                <h2>Please enter the amount</h2>
                            </div>';
                }
                if(empty($_POST['exchange'])){
                    echo    '<div class="errorBox">
                                <h2>Please select a currency exchange rate</h2>
                            </div>';
                }
                if($_POST['bank'] == NULL){
                    echo    '<div class="errorBox">
                                <h2>Please select your bank</h2>
                            </div>';
                }
                if(isset($_POST['name'],
                            $_POST['email'],
                            $_POST['amount'],
                            $_POST['exchange'],
                            $_POST['bank']
                    )){
                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $amount = $_POST['amount'];
                        $exchange = $_POST['exchange'];
                        $bank = $_POST['bank'];

                        // here is where we convert
                        $dollars = intval($amount * $exchange);
                        
                        if(!empty($dollars)){
                            $video_url = '';

                            if($dollars > 1000){
                                $video_url = 'https://www.youtube.com/embed/HgzGwKwLmgM'; // Lots of money
                                $mood = 'happy';
                                
                            }else{
                                $video_url = 'https://www.youtube.com/embed/Pvtlt-p7vB4'; // Not a lot of money
                                $mood = 'sad';
                                
                            }
                            echo '
                                <div class="'.$mood.'">
                                    <h2>Hello, '.$name.'</h2>
                                    <p>You now have $'.$dollars.' American Dollars. Your balance will be deposited to <b>'.$bank.'</b> and we will email you at: <b>'.$email.'</b> in the next 24 hours.</p>
                                    <aside>
                                        <div class="embed-container">
                                            <iframe src="'.$video_url.'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>
                                    </aside>
                                </div>
                                
                                ';
                        }
                    } // end if(isset)
            } // end server request
        ?>
        <footer>
                <p>
                    Copyright &copy; 2021 All Rights Reserved
                    <a href="../index.php">Web Design by Ted Miller</a>
                    <a href="">Terms of Use</a>
                    <a href="https://validator.w3.org/nu/?doc=<?=$currentURL?>" target="_blank" title="Validate HTML">Check HTML</a>
                    <a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $currentURL?>" rel="nofollow" target="_blank" title="Validate CSS">Check CSS</a>
                </p>
            </footer>
    </body>
</html>