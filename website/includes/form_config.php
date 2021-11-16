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