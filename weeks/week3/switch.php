<?php
// class coffee exercise
// if today is Thursday, it will be pumpkin latte day
// if today is Friday, it will be something else
// $variable = 'Life is good';
// if(isset($variable)){
//     echo 'Yippy-skippy the variable has been set';
// } else {
//     echo 'Variable has not been set';
// };

// setting the switch
// if something is set, $today, then all is well
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and Start with a "$_"

date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}

// switch

switch($today) {
    case 'Thursday' : 
        $coffee = '<h2>Thursday is our Pumpkin Latte Day!</h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'Pumpkin Latte';
        $content = 'The Pumpkin Spice Latte is a coffee drink made with a mix of traditional autumn spice flavors, steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. The beverage is most commonly associated with Starbucks, which first offered the drink in 2003, and the season of fall.';
        break;
    case 'Friday' :
        $coffee = '<h2>Friday is our Americano day!</h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = 'Caffè Americano is a type of coffee drink prepared by diluting an espresso with hot water, giving it a similar strength to, but different flavor from, traditionally brewed coffee. The strength of an Americano varies with the number of shots of espresso and the amount of water added.';
        break;
    case 'Saturday' :
        $coffee = '<h2>Saturday is our Regular Joe day!</h2>';
        $pic = 'coffee.png';
        $alt = 'Coffee';
        $content = 'Coffee is a brewed drink prepared from roasted coffee beans, the seeds of berries from certain Coffea species. From the coffee fruit, the seeds are separated to produce a stable, raw product: unroasted green coffee.';
        break;
    case 'Sunday' :
        $coffee = '<h2>Sunday is our Green Tea Day!</h2>';
        $pic = 'green-tea.jpg';
        $alt = 'Green Tea';
        $content = 'Green tea is a type of tea that is made from Camellia sinensis leaves and buds that have not undergone the same withering and oxidation process used to make oolong teas and black teas. Green tea originated in China, and since then its production and manufacture has spread to other countries in East Asia.';
        break;
    case 'Monday' :
        $coffee = '<h2>Monday</h2>';
        break;
    case 'Tuesday' :
        $coffee = '<h2>Tuesday</h2>';
        break;
    case 'Wednesday' :
        $coffee = '<h2>Wednesday</h2>';
        break;
}
?>
<doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Switch Classwork Exercise</title>
    <style>
        #wrapper{
            width:940px;
            margin:40px auto;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <h1>Switch Classwork Exercise</h1>
        <?php
            echo $coffee;

        ?>
        <img src="./images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>">
        <p><?php echo $content; ?></p>
        <h2>Check out our daily specials</h2>
        <ul>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
        </ul>
    </div>
</body>
</html>
