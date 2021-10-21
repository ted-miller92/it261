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
        $coffee = '<h2>Monday is Cafe au Lait Day!</h2>';
        $pic = 'cafeAuLait.jpg';
        $alt = 'Cafe au Lait';
        $content = 'Café au lait (/ˌkæfeɪ oʊ ˈleɪ, kæˌfeɪ, kə-/; French: [kafe o lɛ]; French for "coffee with milk") is coffee with hot milk added. It differs from white coffee, which is coffee with cold milk or other whiteners added. ';
        break;
    case 'Tuesday' :
        $coffee = '<h2>Tuesday is Red-Eye Day!</h2>';
        $pic = 'redEye.jpg';
        $alt = 'Red Eye';
        $content = 'A red eye is a fortified coffee drink in which espresso is combined with normal drip coffee. It is known by various names, some of which refer to different variants. Drip coffee to which espresso is added may be called a red eye, black eye, or dead eye, depending on the number of shots which have been added. ';
        break;
    case 'Wednesday' :
        $coffee = '<h2>Wednesday is Cortado Day!</h2>';
        $pic = 'cortado.jpg';
        $alt = 'Cortado';
        $content = 'A cortado is a beverage consisting of espresso mixed with a roughly equal amount of warm milk to reduce the acidity. The milk in a cortado is steamed, but not frothy and "texturized" as in many Italian coffee drinks.

        The word cortado is the past participle of the Spanish verb cortar (to cut), in the sense of "dilute", and can refer variously to either coffee or espresso drinks throughout Spanish and Portuguese speaking countries. ';
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
        img{
            max-width:300px;
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
            <li><a href="switch.php?today=Sunday">Sunday</a></li>
            <li><a href="switch.php?today=Monday">Monday</a></li>
            <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
            <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
            <li><a href="switch.php?today=Thursday">Thursday</a></li>
            <li><a href="switch.php?today=Friday">Friday</a></li>
            <li><a href="switch.php?today=Saturday">Saturday</a></li>
        </ul>
    </div>
</body>
</html>
