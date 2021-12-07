<?php 
session_start();
include('config.php'); 

// if the user has not logged in, they will be directed to login.php
if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = 'Please log in first';
    header('Location:login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
        <!-- begin logout/welcome message -->
        <?php if(isset($_SESSION['success'])) : ?>
        <div id="success">
            <h3>
                <?php echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div><!-- end div success -->
        <script type="text/javascript">
            // close the succes div in 5 secs
            window.setTimeout("closeSuccessDiv();", 5000);

            function closeSuccessDiv(){
            document.getElementById("success").style.display=" none";
            }
        </script>
        <?php endif ; ?>

        <?php
        if(isset($_SESSION['username'])) : ?>
            <div class="welcome-logout">
                <h3>
                    <?php echo htmlspecialchars($_SESSION['username']);?>
                </h3>
                <p> <a href="index.php?logout='1' ">Log Out</a></p>
            </div> <!-- end logout/welcome div -->
        <?php endif ;?>
        <!-- end logut/welcome messages -->
        <nav>
            <ul>
                <?php echo create_nav($nav); ?>
            </ul>
        </nav>
        </header>
        <div id="hero">
            <h1>Movie Club</h1>
        </div><!-- end hero -->
