<?php
// For Each loop

$show = array(
    'Name' => 'Handmaid\s Tale',
    'Actor' => 'Elizabeth Moss',
    'Genre' => 'Drama',
    'Author' => 'Margaret Atwood',
    'Year' => 1987
);

$show['Name'] = 'Handmaid\'s Tale';
$show['Actor'] = 'Elizabeth Moss';
$show['Genre'] = 'Drama';
$show['Author'] = 'Margaret Atwood';

foreach($show as $key => $value) {
    echo '<b>'.$key.'</b>: '.$value.'<br>';
}

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);

foreach($nav as $link => $page) {
    echo '<a href="'.$link.'">'.$page.'</a>';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>For Each Loop</title>
    <style>
        #wrapper{
            width:580px;
            margin: 20px auto;
        }
        nav a {
            color:darkgreen;
            font-weight:bold;
            text-decoration:none;
            font-size:1.2em;
            font-family:Verdana, arial, sans-serif;
        }
        nav a:hover{
            color:red;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <h1>Our for each loops</h1>
        <h2>Handmaid's Tale</h2>
        <?php
        foreach($show as $key => $value) {
            echo '<b>'.$key.'</b>: '.$value.'<br>';
        }
        ?>
        <h2>Navigation</h2>
        <nav>
            <ul>
                <?php
                    foreach($nav as $link => $page){
                        echo '<li><a href="'.$link.'">'.$page.'</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </div>
</body>
</html>