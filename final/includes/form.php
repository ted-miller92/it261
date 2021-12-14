<?php

// form input variables
$first_name = '';
$email = '';

// for input errors
$first_name_error = '';
$email_error = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // error handling
    if(empty($_POST['first_name'])){
        $first_name_error = 'Please fill out your first name';
    }else{
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['email'])){
        $email_error = 'Please enter your email';
    }else{
        $email = $_POST['email'];
    }
    //end error handling

    // email send
    if(isset($_POST['first_name'],
            $_POST['email']
        )){
        $to = 'ted.miller92@gmail.com';
        $subject = 'New Movie Suggestions';
        $body = 'This is a new movie suggestion from '.$first_name.' at '.$email.'';

        $headers = array(
            'From' => 'noreply@scriptedmiller.com',
            'Reply-to' => ''.$email.''
        );

        mail($to, $subject, $body, $header);
        header('location: thx.php');
    } // end email send
} // end server request
?>

<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
    <fieldset>
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">
        <span class="error"><?php echo $first_name_error;?></span>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
        <span class="error"><?php echo $email_error;?></span>

        <input type="submit" value="Submit">
    </fieldset>
</form>