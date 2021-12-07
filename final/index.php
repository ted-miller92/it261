<?php

// this is the home page of the website
// after creating this index.php, we will not be able to access unless we are logged in

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

include('includes/header.php');?>

</header>
<div id="hero">
    <h1>Movie Club</h1>
    <!-- <img src="images/" alt="hero image"/> -->
</div><!-- end hero -->
<div id="wrapper">
    <main>
        <h3>Welcome to Movie Club</h3>
        <h5>This is a club where you can sign up to talk about your favorite movies, discuss new releases and learn about old classics.</h5>
    </main>
    <aside>
    
    </aside>
</div><!-- end wrapper -->
<?php include('includes/footer.php'); ?>
<!-- <body> closes in footer.php -->
<!-- <html> closes in footer.php -->
