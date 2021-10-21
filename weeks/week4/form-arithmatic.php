<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Arithmetic Form</title>
        <style>
            form {
                width: 400px;
                margin: 0 auto;
            }
            fieldset{
                border: 3px solid green;
                padding:10px;
            }

            label{
                display:block;
                margin-bottom:5px;
            }
            input{
                margin-bottom:10px;
            }
            input[type=text], input[type=email], textarea{
                margin-bottom:10px;
                width:90%;
            }
            h3{
                color:red;
                text-align:center;
            }
            .box{
                width:400px;
                margin:20px auto;
                padding:15px;
                background:beige;
            }
        </style>
    </head>
    <body>
        <form action="" method="post">
            <fieldset>
                <label for="firstname">First Name</label>
                <input type="text" name="firstname">

                <label for="coffees">Number of coffees: </label>
                <input type="number" name="coffees">

                <label for="lattes">Number of lattes</label>
                <input type="number" name="lattes">

                <label for="cappucinos">Number of cappucinos</label>
                <input type="number" name="cappucinos">

                <input type="submit" value="Send it!">
            </fieldset>

        </form>
        <?php 
        // form 4 - adding html and css

        if(isset($_POST['firstname'],
                $_POST['coffees'],
                $_POST['lattes'],
                $_POST['cappucinos'])){
                    $firstname = $_POST['firstname'];
                    $coffees = $_POST['coffees'];
                    $int_coffees = intval($coffees);
                    $lattes = $_POST['lattes'];
                    $int_lattes = intval($lattes);
                    $cappucinos = $_POST['cappucinos'];
                    $int_cappucinos = intval($cappucinos);

                    $total = $int_coffees + $int_lattes + $int_cappucinos;

                    
        // nest an ifelse statement
            if(empty($firstname && $int_coffees && $int_lattes && $int_cappucinos)){
                echo '<h3>Please fill out the fields</h3>';
            }else{
                echo '
                <div class="box">
                <h2>Hello '.$firstname.'</h2>
                    <p>You have ordered the following:</p>
                    <ul>
                        <li>'.$int_coffees.' coffees</li>
                        <li>'.$int_lattes.' lattes</li>
                        <li>'.$int_cappucinos.' cappucinos</li>
                    </ul>
                    <p>Totalling '.$total.' beverages</p>
                </div>
                ';
            } //end ifelse
        } 
        // end isset
        ?>
    </body>
</html>