<?php include "./config.php";?>
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
                <ul>
                    <?php echo create_nav($nav); ?>
                </ul>
            </nav>
        </div> <!-- end header-inner-->
    </header>