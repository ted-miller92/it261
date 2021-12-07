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

include('includes/header.php');

if(isset($_SESSION['success'])) : ?>

<div class="success">

<h3>
    <?php echo $_SESSION['success'];
    unset($_SESSION['success']);
    ?>
</h3>
</div><!-- end div success -->
<?php endif ; ?>

<?php
if(isset($_SESSION['username'])) : ?>

<div class="welcome-logout">
<h3>
    Hello <?php echo htmlspecialchars($_SESSION['username']);?>
</h3>
<p><a href="index.php?logout='1' ">Log Out</a></p>
</div> <!-- end logout/welcome div -->
<?php endif ;?>

</header>

<div id="wrapper">

    <h1>Welcome to the about page</h1>

</div><!--end wrapper -->

<?php include('includes/footer.php'); ?>
