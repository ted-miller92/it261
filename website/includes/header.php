<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// change logo of 'website' header


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
            $headline = 'Welcome to our Contact Page for IT 261 Website';
            break;
    case 'gallery.php' :
        $title = 'Gallery Page of IT261 Website';
        $body = 'gallery inner';
        $headline = 'Welcome to our Gallery Page for IT 261 Website';
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

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body class="<?php  echo $body; ?>">
    <header class="<?php echo $character; ?>">
        <div class="header-inner">
            <a href="index.php">
                <img id="logo" src="<?php echo $logo; ?>" alt="logo">
            </a>
            
            <nav>
                <!-- <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Daily</a></li>
                    <li><a href="">Projects</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Gallery</a></li>
                </ul> -->
                <ul>
                    <?php 
                        foreach($nav as $key => $value){
                            if(THIS_PAGE == $key){
                                echo '<li><a class="current" href= "'.$key.'">'.$value.'</a></li>';
                            }else{
                                echo '<li><a href="'.$key.'">'.$value.'</a></li>';
                            }
                            
                        }
                    ?>
                </ul>
            </nav>
        </div> <!-- end header-inner-->
    </header>