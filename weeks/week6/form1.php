<?php
// cannot echo above the doctype declaration
// simply making a change to test new PAT
$first_name = '';
$last_name = '';
$gender = '';
$email = '';
$phone = '';
$wines = '';
$regions = '';
$comments = '';
$privacy = '';

$first_name_error = '';
$last_name_error = '';
$gender_error = '';
$email_error = '';
$phone_error = '';
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
        $last_name = $_POST['last_name'];
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
    if($_POST['regions'] == NULL){
        $regions_error = 'Please select a region';
    }else{
        $regions = $_POST['regions'];
    }
    if(empty($_POST['comments'])){
        $comments_error = 'Please share your comments with us';
    }else {
        $comments = $_POST['comments'];
    }
    if(empty($_POST['privacy'])){
        $privacy_error = 'Please agree to terms';
    }else{
        $privacy = $_POST['privacy'];
    }
    $sticky_phone = '';
    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phone_error = 'Please enter your phone number';
    }elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){
            $phone_error = 'Invalid format. Enter in format xxx-xxx-xxxx';
            $sticky_phone = $_POST['phone'];
            unset($_POST['phone']);
        }else{
        $phone = $_POST['phone'];
        }
    }
    // end error handling

    // wine function
    function my_wines(){
        $wine_return = '';
        if(!empty($_POST['wines'])){
            $wine_return = implode(', ', $_POST['wines']);
        };
        return $wine_return;
    }

    if(isset($_POST['first_name'],
    $_POST['last_name'],
    $_POST['email'],
    $_POST['phone'],
    $_POST['gender'],
    $_POST['wines'],
    $_POST['regions'],
    $_POST['comments'],
    $_POST['privacy']
        )){
            $to = 'ted.miller92@gmail.com';
            $subject = 'Form test from form1.php' .date('m/d/y') ;
            $body = '
            First name: '.$first_name.' '.PHP_EOL.'
            Last name: '.$last_name.' '.PHP_EOL.'
            Gender: '.$gender.' '.PHP_EOL.' 
            Email: '.$email.' '.PHP_EOL.'
            Phone: '.$phone.' '.PHP_EOL.'
            Region: '.$regions.' '.PHP_EOL.'
            Wines: '.my_wines().' '.PHP_EOL.'
            Comments: '.$comments.' '.PHP_EOL.'
            ';

            $headers = array(
                'From' => 'noreply@scriptedmiller.com',
                'Reply-to' => ''.$email.'',
                
            );

            mail($to, $subject, $body, $headers);
            header('location: thx.php');
        }
} // end if server request


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
                <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">
                <span class="error"><?php echo $first_name_error;?></span>

                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">
                <span class="error"><?php echo $last_name_error;?></span>

                <label for="email">Email</label>
                <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
                <span class="error"><?php echo $email_error;?></span>

                <label for="phone">Phone Number</label>
                <input type="tel" placeholder="xxx-xxx-xxxx" name="phone" value="<?php echo $sticky_phone;?>">
                <span class="error"><?php echo $phone_error;?></span>

                <label for="gender">Gender</label>
                <ul>
                    <li><input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked"';?>>Female</li>
                    <li><input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked"';?>>Male</li>
                    <li><input type="radio" name="gender" value="other" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'checked="checked"';?>>Other</li>
                </ul>
                <span class="error"><?php echo $gender_error;?></span>

                <label for="wines">Favorite Wines</label>
                <ul>
                    <li><input type="checkbox" name="wines[0]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab',$wines)) echo 'checked="checked"';?>>Cabernet</li>
                    <li><input type="checkbox" name="wines[1]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked="checked"'; ?>>Merlot</li>
                    <li><input type="checkbox" name="wines[2]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked="checked"'; ?>>Syrah</li>
                    <li><input type="checkbox" name="wines[3]" value="malbec" <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked="checked"'; ?>>Malbec</li>
                    <li><input type="checkbox" name="wines[4]" value="red" <?php if(isset($_POST['wines']) && in_array('red', $wines)) echo 'checked="checked"'; ?>>Red Blend</li>
                </ul>
                <span class="error"><?php echo $wines_error;?></span>

                <label for="regions">Regions</label>
                <select name="regions">
                    <option value="" NULL <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected';?>>Select One</option>
                    <option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected';?>>Northwest</option>
                    <option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected';?>>Southwest</option>
                    <option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'mw') echo 'selected';?>>Midwest</option>
                    <option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected';?>>Northeast</option>
                    <option value="se" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'se') echo 'selected';?>>Southeast</option>
                    <option value="so" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'so') echo 'selected';?>>South</option>
                </select>
                <span class="error"><?php echo $regions_error;?></span>

                <label for="comments">Comments</label>
                <textarea name="comments" ><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
                <span class="error"><?php echo $comments_error;?></span>
                <span></span>

                <label for="privacy">Privacy</label>
                <ul>
                    <li><input type="radio" name="privacy" <?php if(isset($_POST['privacy'])) echo 'checked="checked"';?>>I agree</li>
                </ul>
                <span class="error"><?php echo $privacy_error;?></span>
                <input type="submit" value="Submit">
                <p><a href="">Reset</a></p>
            </fieldset>
        </form>
    </body>
</html>
