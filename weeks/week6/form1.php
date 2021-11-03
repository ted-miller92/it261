<?php
// cannot echo above the doctype declaration

$first_name = '';
$last_name = '';
$gender = '';
$email = '';
$wines = '';
$regions = '';
$comments = ''; 
$privacy = '';

$first_name_error = '';
$last_name_error = '';
$gender_error = '';
$email_error = '';
$wines_error = '';
$regions_error = '';
$comments_error = ''; 
$privacy_error = '';


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // error handling
    if(empty($_POST['first_name'])){
        $first_name_error = 'Please fill out your first name';
    }else{
        $first_name = $_POST['first_name'];
    }
    if(empty($_POST['last_name'])){
        $last_name_error = 'Please fill out your last name';
    }else{
        $last = $_POST['last_name'];
    }
    if(empty($_POST['gender'])){
        $gender_error = 'Please select your gender';
    }else{
        $gender = $_POST['gender'];
    }
    if(empty($_POST['email'])){
        $email_error = 'Please enter your email address';
    }else{
        $email = $_POST['email'];
    }
    if(empty($_POST['wines'])){
        $wines_error = 'Please select which wines';
    }else{
        $wines = $_POST['wines'];
    }
    // end error handling
}
?>
<!DOCTYPE html>

<html>
    <head>
        <title>Emailable Form 1</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
        <fieldset>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name">
            <span class="error"><?php echo $first_name_error;?></span>

            <label for="last_name">Last Name</label>
            <input type="text" name="last_name">
            <span class="error"><?php echo $last_name_error;?></span>

            <label for="email">Email</label>
            <input type="email" name="email">

            <label for="gender">Gender</label>
            <ul>
                <li><input type="radio" name="gender" value="female">Female</li>
                <li><input type="radio" name="gender" value="male">Male</li>
                <li><input type="radio" name="gender" value="other">Other</li>
            </ul>

            <label for="wines">Favorite Wines</label>
            <ul>
                <li><input type="checkbox" name="wines[0]" value="cab" >Cabernet</li>
                <li><input type="checkbox" name="wines[1]" value="merlot">Merlot</li>
                <li><input type="checkbox" name="wines[2]" value="syrah">Syrah</li>
                <li><input type="checkbox" name="wines[3]" value="malbec">Malbec</li>
                <li><input type="checkbox" name="wines[4]" value="red" >Red Blend</li>
            </ul>

            <label for="regions">Regions</label>
            <select name="regions">
                <option value="" NULL>Select One</option>
                <option value="nw">Northwest</option>
                <option value="sw">Southwest</option>
                <option value="mw">Midwest</option>
                <option value="ne">Northeast</option>
                <option value="se">Southeast</option>
                <option value="so">South</option>
            </select>

            <label for="comments">Comments</label>
            <textarea name="comments"></textarea>

            <label for="privacy">Privacy</label>
            <ul>
                <li><input type="radio" name="privacy">I agree</li>
            </ul>

            <input type="submit" value="Submit">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>
    <?php
    // our first emailable form

    ?>
    </body>
</html>
