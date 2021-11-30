<?php $logo = 'images/logo.png'; ?>
<?php include "includes/header.php" ?>
    <div id="wrapper">
        <div id="hero">
        <?php 
            echo random_pictures($photos);
        ?>
        </div> <!--end hero-->
        <main>
            <h1><?php echo $headline; ?></h1>
            <p>The following is a screen shot showing the table of cheese items in Adminer</p>
            <img class="screenshot" src="images/cheese-table-screenshot.png" alt="cheese table">
        </main>
<?php include "includes/footer.php" ?>