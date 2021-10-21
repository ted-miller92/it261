<?php

// our first form
// don't care about the html
// the form elements are important
// the for ATTRIBUTES and VALUES are important
// use the global variable of $_POST
// the two input fields will be name and email

if(isset($_POST['firstname'], 
        $_POST['lastname'],
        $_POST['comments'],
        $_POST['email'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $comments = $_POST['comments'];
    $email = $_POST['email'];
    if(empty($_POST['firstname'] && 
            $_POST['lastname'] &&
            $_POST['comments'] &&
            $_POST['email'])){
        echo 'Please fill out the fields';
    } else {
        echo $firstname;
        echo '<br>';
        echo $lastname;
        echo '<br>';
        echo $comments;
        echo '<br>';
        echo $email;
    }
}else{
    echo '
        <form action ="" method="post">
            <label>FIRST NAME</label>
            <input type="text" name="firstname">

            <label>LAST NAME</label>
            <input type="text" name="lastname">

            <label>EMAIL</label>
            <input type="email" name="email">

            <label>COMMENTS</label>
            <textarea name="comments"></textarea>

            <input type="submit" value="Send it!">
        </form>
    ';
}