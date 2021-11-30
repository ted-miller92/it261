<?php

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

$logo = 'images/logo.png';

// change logo of 'website' header

// create a function for navigation so that header.php can call nav function

function create_nav($nav){
    $nav_list = '';
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key){
            $nav_list .= '<li><a class="current" href= "'.$key.'">'.$value.'</a></li>';
        }else{
            $nav_list .= '<li><a href="'.$key.'">'.$value.'</a></li>';
        }
    }
    return $nav_list;
} // end create_nav function

switch(THIS_PAGE){
    case 'index.php' :
        $title = 'Home Page of IT261 Website';
        $body = 'home';
        $headline = 'Welcome to our Home Page for IT 261 Website';
        break;
    case 'about.php' :
        $title = 'About Page of IT261 Website';
        $body = 'about inner';
        $headline = 'About Page for IT 261 Website';
        break;
    case 'daily.php' :
        $title = 'Daily Page of IT261 Website';
        $body = 'daily inner';
        $headline = 'Welcome to our Daily Page for IT 261 Website, where our HW3 Switch will display';
        $logo = 'images/one-ring.png';
        break;
    case 'project.php' :
        $title = 'Cheese';
        $body = 'project inner';
        $headline = 'Delicious Cheese';
        break;
    case 'contact.php' :
            $title = 'Contact Page of IT261 Website';
            $body = 'contact inner';
            $headline = 'Contact Us';
            break;
    case 'gallery.php' :
        $title = 'Gallery Page of IT261 Website';
        $body = 'gallery inner';
        $headline = 'Welcome to our Gallery Page for IT 261 Website';
        break;
    case 'thx.php' :
        $title = 'Thank you';
        $body = 'thx page';
        $headline = 'Thank you for your request!';
        break;
}

// this is the beginning of the switch for HW3
if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

//Check HTML and CSS of Current page
$currentURL = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
// define random_pictures() function
$photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5'
);

function random_pictures($photos){
    $i = rand(0, 4);

    $selected_image = ''.$photos[$i].'.jpg';
    
    echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
}

// form logic and handling

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
                $to = 'szemeo@mystudentswa.com'; // change this depending on submission status
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

// Begin Database Connection



function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
    echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    }  else {
        echo ' Houston, we have a problem!';
        die();
    } 
}
?>