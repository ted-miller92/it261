<?php 

$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$bike_type = '';
$frame_size = '';
$wheel_size = '';
$features = '';
$comments = '';
$privacy = '';

$first_name_error = '';
$last_name_error = '';
$email_error = '';
$phone_error = '';
$bike_type_error = '';
$frame_size_error = '';
$wheel_size_error = '';
$features_error = '';
$comments_error = '';
$privacy_error = '';
$sticky_phone = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // error handling
    if(empty($_POST['first_name'])){
        $first_name_error = 'Please enter your first name';
    }else{
        $first_name = $_POST['first_name'];
    }

    if(empty($_POST['last_name'])){
        $last_name_error = 'Please enter your last name';
    }else{
        $last_name = $_POST['last_name'];
    }

    if(empty($_POST['email'])){
        $email_error = 'Please enter your email';
    }else{
        $email = $_POST['email'];
    }
    
    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phone_error = 'Please enter your phone number';
    }elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){
            $phone_error = 'Invalid format. Enter in format xxx-xxx-xxxx';
            $sticky_phone = $_POST['phone'];
            unset($_POST['phone']);
        }else{
        $phone = $_POST['phone'];
        $sticky_phone = $_POST['phone'];
        }
    }

    if(empty($_POST['bike_type'])){
        $bike_type_error = 'Please select one or more bike type';
    }else{
        $bike_type = $_POST['bike_type'];
    }

    if($_POST['frame_size'] == NULL){
        $frame_size_error = 'Please select a frame size(s)';
    }else{
        $frame_size = $_POST['frame_size'];
    }

    if(empty($_POST['wheel_size'])){
        $wheel_size_error = 'Please select a wheel size';
    }else{
        $wheel_size = $_POST['wheel_size'];
    }
    
    if(empty($_POST['features'])){
        $features_error = '';
    }else{
        $features= $_POST['features'];
    }

    if(empty($_POST['comments'])){
        $comments_error = 'Please share any further requests';
    }else {
        $comments = $_POST['comments'];
    }

    if(empty($_POST['privacy'])){
        $privacy_error = 'Please agree to terms';
    }else{
        $privacy = $_POST['privacy'];
    }
    // end error handling

    // features function
    function features(){
        $features_return = '';
        if(!empty($_POST['features'])){
            $features_return = implode(', ', $_POST['features']);
        };
        return $features_return;
    }

    // begin email send
    if(isset($_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['phone'],
            $_POST['bike_type'],
            $_POST['frame_size'],
            $_POST['wheel_size'],
            $_POST['comments'],
            $_POST['privacy']
            )){
                $to = 'ted.miller92@gmail.com';
                $subject = 'New Frame Build from '.$first_name.' '.$last_name.'';
                $body = '
                    This is a new frame build request from '.$first_name.' '.$last_name.'.'.PHP_EOL.'
                    Email: '.$email.' '.PHP_EOL.'
                    Phone Number: '.$phone.' '.PHP_EOL.'
                    Bike type: '.$bike_type.' '.PHP_EOL.'
                    Frame size: '.$frame_size.' '.PHP_EOL.'
                    Wheel size: '.$wheel_size.' '.PHP_EOL.'
                    Features: '.features().' '.PHP_EOL.'
                    Comments: '.$comments.'
                ';

                $headers = array(
                    'From' => 'noreply@scriptedmiller.com',
                    'Reply-to' => ''.$email.''
                );

                mail($to, $subject, $body, $headers);
                header('location: thx.php');
            } // end email
} // end server request

?>
<form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <fieldset>
                    <label for="first_name">First Name:</label>
                    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
                    <span class="error"><?php echo $first_name_error; ?></span>

                    <label for="last_name">Last Name:</label>
                    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
                    <span class="error"><?php echo $last_name_error; ?></span>

                    <label for="email">Email:</label>
                    <input type="text" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
                    <span class="error"><?php echo $email_error; ?></span>

                    <label for="phone">Phone Number</label>
                    <input type="tel" placeholder="xxx-xxx-xxxx" name="phone" value="<?php echo $sticky_phone;?>">
                    <span class="error"><?php echo $phone_error;?></span>

                    <label for="bike_type">Bike Type (Choose one):</label>
                    <ul>
                        <li><input type="radio" name="bike_type" value="road" <?php if(isset($_POST['bike_type']) && $_POST['bike_type'] == 'road') echo 'checked="checked"' ;?>>Road</li>
                        <li><input type="radio" name="bike_type" value="mtn" <?php if(isset($_POST['bike_type']) && $_POST['bike_type'] == 'mtn') echo 'checked="checked"' ;?>>MTN</li>
                        <li><input type="radio" name="bike_type" value="commuter" <?php if(isset($_POST['bike_type']) && $_POST['bike_type'] == 'commuter') echo 'checked="checked"' ;?>>Commuter</li>
                        <li><input type="radio" name="bike_type" value="bmx" <?php if(isset($_POST['bike_type']) && $_POST['bike_type'] == 'bmx') echo 'checked="checked"' ;?>>BMX</li>
                        <li><input type="radio" name="bike_type" value="track" <?php if(isset($_POST['bike_type']) && $_POST['bike_type'] == 'track') echo 'checked="checked"' ;?>>Track</li>
                        <li><input type="radio" name="bike_type" value="other" <?php if(isset($_POST['bike_type']) && $_POST['bike_type'] == 'other') echo 'checked="checked"' ;?>>Other (describe in comments)</li>
                    </ul>
                    <span class="error"><?php echo $bike_type_error; ?></span>

                    <label for="frame_size">Frame size (cm):</label>
                    <select name="frame_size">
                        <option value="" NULL <?php if(isset($_POST['frame_size']) && $_POST['frame_size'] == NULL) echo 'selected'; ?>>Select one</option>
                        <?php
                            for ($x = 48; $x <= 63; $x++) {
                                echo '<option value="'.$x.'" ';
                                if(isset($_POST['frame_size']) && $_POST['frame_size'] == $x){
                                    echo 'selected>'.$x.'</option>';
                                }else{
                                    echo '>'.$x.'</option>';
                                }
                            } 
                        ?>
                    </select>
                    <span class="error"><?php echo $frame_size_error;?></span>

                    <label for="wheel_size">Wheel Size:</label>
                    <ul>
                        <li><input type="radio" name="wheel_size" value='24' <?php if(isset($_POST['wheel_size']) && $_POST['wheel_size'] == '24') echo 'checked="checked"';?>>24"</li>
                        <li><input type="radio" name="wheel_size" value='26' <?php if(isset($_POST['wheel_size']) && $_POST['wheel_size'] == '26') echo 'checked="checked"';?>>26"</li>
                        <li><input type="radio" name="wheel_size" value='650' <?php if(isset($_POST['wheel_size']) && $_POST['wheel_size'] == '650') echo 'checked="checked"';?>>650b</li>
                        <li><input type="radio" name="wheel_size" value='700' <?php if(isset($_POST['wheel_size']) && $_POST['wheel_size'] == '700') echo 'checked="checked"';?>>700c</li>
                        <li><input type="radio" name="wheel_size" value='29' <?php if(isset($_POST['wheel_size']) && $_POST['wheel_size'] == '29') echo 'checked="checked"';?>>29"</li>
                        <li><input type="radio" name="wheel_size" value='other' <?php if(isset($_POST['wheel_size']) && $_POST['wheel_size'] == 'other') echo 'checked="checked"';?>>Other (specify in comments)</li>
                    </ul>
                    <span class="error"><?php echo $wheel_size_error; ?></span>

                    <label for="features">Features (Optional)</label>
                    <ul>
                        <li><input type="checkbox" name="features[0]" value="fender_eyelets" <?php if(isset($_POST['features']) && in_array('fender_eyelets',$features)) echo 'checked="checked"';?>>Fender Eyelets</li>
                        <li><input type="checkbox" name="features[1]" value="rack_mounts" <?php if(isset($_POST['features']) && in_array('rack_mounts', $features)) echo 'checked="checked"'; ?>>Rack Mounts</li>
                        <li><input type="checkbox" name="features[2]" value="adjustable_dropouts" <?php if(isset($_POST['features']) && in_array('adjustable_dropouts', $features)) echo 'checked="checked"'; ?>>Adjustable Dropouts</li>
                        <li><input type="checkbox" name="features[3]" value="canti_posts" <?php if(isset($_POST['features']) && in_array('canti_posts', $features)) echo 'checked="checked"'; ?>>Cantilever Posts</li>
                    </ul>

                    <label for="comments">Comments/Specific Requests</label>
                    <textarea name="comments" ><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
                    <span class="error"><?php echo $comments_error;?></span>

                    <label for="privacy">Privacy</label>
                    <ul>
                        <li><input type="radio" name="privacy" <?php if(isset($_POST['privacy'])) echo 'checked="checked"';?>>I agree</li>
                    </ul>
                    <span class="error"><?php echo $privacy_error;?></span>
                    
                    <input type="submit" value="Submit">
                    <p><a href="">Reset</a></p>        
                </fieldset>
            </form>