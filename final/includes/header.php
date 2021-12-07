<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <header>
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
        <nav>
            <ul>
                <?php echo create_nav($nav); ?>
            </ul>
        </nav>
