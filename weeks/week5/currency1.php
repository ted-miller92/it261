<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Basic Currency Form</title>
        <link href="css/styles.css" type="text/css" rel="stylesheet">

    </head>
    <body>

        <form action="
        <?php
            echo htmlspecialchars($_SERVER['PHP_SELF']);
        ?>
        " method="post">
        <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name">

            <label for="email">Email</label>
            <input type="text" name="email">

            <label for="amount">How much money do you have?</label>
            <input type="number" name="amount">

            <label for="exchange">Choose your exchange rate</label>
            <ul>
                <li><input type="radio" name="exchange" value="0.013">Rubles</li>
                <li><input type="radio" name="exchange" value="0.76">Canadian</li>
                <li><input type="radio" name="exchange" value="1.28">Punds</li>
                <li><input type="radio" name="exchange" value="1.18">Euros</li>
                <li><input type="radio" name="exchange" value="0.0094">Yen</li>
            </ul>
            

            <input type="submit" value="Convert">

            <p><a href="">Reset</a></p>

        </fieldset>


            
        </form>
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                if(empty($_POST['name'] &&
                        $_POST['email'] &&
                        $_POST['amount'] &&
                        $_POST['exchange']
                )){
                    echo '<div class="errorBox">
                            <h2>Please fill out the fields</h2>
                            </div>';
                } elseif(isset($_POST['name'],
                            $_POST['email'],
                            $_POST['amount'],
                            $_POST['exchange']
                )){
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $amount = $_POST['amount'];
                    $exchange = $_POST['exchange'];

                    // here is where we convert
                    $dollars = number_format($amount * $exchange, 2);

                    echo '
                        <div class="box">
                            <h2>Hello, '.$name.'</h2>
                            <p>You now have $'.$dollars.' American Dollars, and we will sending an email at:<b> '.$email.'</b>.</p>
                        </div>
                        ';
                } // ends elseif

                
            } // server request
        ?>
    </body>
</html>