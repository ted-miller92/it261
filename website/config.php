<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

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
        $headline = 'Welcome to our About Page for IT 261 Website';
        break;
    case 'daily.php' :
        $title = 'Daily Page of IT261 Website';
        $body = 'daily inner';
        $headline = 'Welcome to our Daily Page for IT 261 Website, where our HW3 Switch will display';
        break;
    case 'project.php' :
        $title = 'Project Page of IT261 Website';
        $body = 'project inner';
        $headline = 'Welcome to our Project Page for IT 261 Website';
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
?>