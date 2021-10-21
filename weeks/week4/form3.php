<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Form 3 with HTML and CSS</title>
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

                <label for="lastname">Last Name</label>
                <input type="text" name="lastname">

                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="comments">Comments</label>
                <textarea name="comments"></textarea>

                <input type="submit" value="Send it!">
            </fieldset>

        </form>
        <?php 
        // form 3 - adding html and css

        if(isset($_POST['firstname'],
                $_POST['lastname'],
                $_POST['email'],
                $_POST['comments'])){
                    $firstname = $_POST['firstname'];
                    $lastname = $_POST['lastname'];
                    $email = $_POST['email'];
                    $comments = $_POST['comments'];
        // nest an ifelse statement
            if(empty($firstname && $lastname && $email && $comments)){
                echo '<h3>Please fill out the fields</h3>';
            }else{
                // echo $firstname;
                // echo $lastname;
                // echo $email;
                // echo $comments;
                echo '
                <div class="box">
                    <ul>
                        <li><b>First Name: '.$firstname.'</b></li>
                        <li><b>Last Name: '.$lastname.'</b></li>
                        <li><b>Email: '.$email.'</b></li>
                        <li><b>Comments: '.$comments.'</b></li>
                    </ul>
                </div>
                ';

            } //end ifelse
        } 
        // end isset
        ?>
    </body>
</html>