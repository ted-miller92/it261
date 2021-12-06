<?php include('config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Place holder title</title>
    <link rel="stylesheet" href="css/styles.css" />
</head>

<body>
    <header>
        <nav>
            <ul>
                <?php echo create_nav($nav); ?>
            </ul>
        </nav>
    </header>
    <div id="hero">
        <h1>Movie Club</h1>
        <!-- <img src="images/" alt="hero image"/> -->
    </div><!-- end hero -->
    <div id="wrapper">
        <body>
            <main>
                <h3>Welcome to Movie Club</h3>
                <h5>This is a club where you can sign up to talk about your favorite movies, discuss new releases and learn about old classics.</h5>
            </main>
            <aside>
            
            </aside>
        </body>
        <footer>
            <ul>
                <li>Copyright &copy; <?php 
                    $date_current = date('Y');
                    $date_created = 2021;
                    if($date_created == $date_current){
                        echo $date_current;
                    }else{
                        echo ''.$date_created.' - '.$date_current.'';
                    }
                    ?>
                </li>
                <li>All Rights Reserved</li>
                <li><a href="../index.php">Web Design by Ted Miller</a></li>
                <li><a href="">Terms of Use</a></li>
                <li><a href="https://validator.w3.org/nu/?doc=<?=$currentURL?>">HTML Validation</a></li>
                <li><a href="http://jigsaw.w3.org/css-validator/validator?uri=<?php echo $currentURL?>">CSS Validation</a></li>
            </ul>
        </footer>
    </div><!-- end wrapper -->
</body>
</html>