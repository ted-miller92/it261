<?php 

date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}
$day_array = array(
    "Gandalf" => "Sunday",
    "Bilbo" => "Monday",
    "Frodo" => "Tuesday",
    "Aragorn" => "Wednesday",
    "Samwise" => "Thursday",
    "Boromir" => "Friday",
    "Gimli" => "Saturday",
);
// switch

switch($today){
    case 'Sunday':
        $character = 'Gandalf';
        $description = 'Gandalf (Norse; IPA: [gand:alf]) the Grey, later known as Gandalf the White, and originally named Olórin (Quenya; IPA: [oˈloːrin]), was an Istar (Wizard), dispatched to Middle-earth in the Third Age to combat the threat of Sauron. He joined Thorin and his company to reclaim the Lonely Mountain from Smaug, helped form the Fellowship of the Ring to destroy the One Ring, and led the Free Peoples in the final campaign of the War of the Ring. ';
        $photo = 'images/gandalf.png';
        $alt = 'Gandalf';
        $quote = 'Many that live deserve death. And some that die deserve life. Can you give it to them? Then do not be too eager to deal out death in judgment. For even the very wise cannot see all ends.';
        break;
    case 'Monday':
        $character = 'Bilbo';
        $description = 'Bilbo Baggins was a hobbit of the Shire, the main protagonist of The Hobbit and a secondary character in The Lord of the Rings. Gandalf suggested to Thorin and Company that they hire Bilbo Baggins to be their burglar in the Quest of Erebor, and later fought in the Battle of Five Armies. Bilbo was also one of the bearers of the One Ring, and the first to voluntarily give it up, although with some difficulty. He wrote many of his adventures in a book he called There and Back Again. Bilbo adopted his second-cousin-once-removed Frodo Baggins to be his heir after his parents, Drogo Baggins and Primula Brandybuck, drowned in the Brandywine River. Bilbo was the first hobbit to become famous in the world at large, and one of the few to set foot in the Undying Lands. ';
        $photo = 'images/bilbo.jpg';
        $alt = 'Bilbo';
        $quote = 'I don\'t know half of you half as well as I should like; and I like less than half of you half as well as you deserve.';
        break;
    case 'Tuesday':
        $character = 'Frodo';
        $description = 'Frodo Baggins, son of Drogo Baggins, was a hobbit of the Shire in the late Third Age. He was, and still is, Tolkien\'s most renowned character for his leading role in the Quest of the Ring, in which he bore the One Ring to Mount Doom, where it was destroyed. He was a Ring-bearer, best friend to his gardener, Samwise Gamgee, and one of the three hobbits who sailed from Middle-earth to the Uttermost West at the end of the Third Age. ';
        $photo = 'images/frodo.jpg';
        $alt = 'Frodo';
        $quote = 'I will take the Ring, though I do not know the way.';
        break;
    case 'Wednesday':
        $character = 'Aragorn';
        $description = 'Aragorn II, son of Arathorn II and Gilraen, also known as Elessar and Strider, was the 16th and last Chieftain of the Dúnedain of the North; later crowned King Elessar Telcontar (March 1, 2931 - FO 120 or SR 1541), the 26th King of Arnor, 35th King of Gondor and first High King of Gondor and Arnor since the short reign of Isildur. He was a great ranger and warrior, and as Isildur\'s heir he bore the shards of Narsil, reforged and renamed Andúril, Flame of the West, in the War of the Ring.';
        $photo = 'images/aragorn.png';
        $alt = 'Aragorn';
        $quote = 'Deeds will not be less valiant because they are unpraised.';
        break;
    case 'Thursday':
        $character = 'Samwise';
        $description = 'Samwise Gamgee, known as Sam, was a hobbit of the Shire. He was Frodo Baggins\' gardener and best friend. Sam proved himself to be Frodo\'s closest and most dependable companion, the most loyal of the Fellowship of the Ring, and played a critical role in protecting Frodo and destroying the One Ring. ';
        $photo = 'images/sam.png';
        $alt = 'Samwise';
        $quote = 'Don\'t turn me into anything... unnatural.';
        break;
    case 'Friday':
        $character = 'Boromir';
        $description = 'Boromir was a valiant warrior of Gondor for his prowess in combat and skill on the battlefield. He was the eldest son of Denethor II, who was Steward of Gondor during the War of the Ring, and his wife Finduilas. Even the people of Rohan admired him, particularly Éomer. He was the older brother of Faramir.';
        $photo = 'images/boromir.jpg';
        $quote = 'One does not simply walk into Mordor.';
        $alt = 'Boromir';
        break;
    case 'Saturday':
        $character = 'Gimli';
        $description = 'Gimli, son of Glóin, was a well-respected dwarf warrior in Middle-earth during the Great Years. He was a member of the Fellowship of the Ring and was the only one of the dwarves to readily fight alongside elves in the war against Sauron at the end of the Third Age. After the defeat of Sauron, he was given lordship of the Glittering Caves at Helm\'s Deep. ';
        $photo = 'images/gimli.png';
        $alt = 'Gimli';
        $quote = 'Faithless is he that says farewell when the road darkens.';
        break;
}

include "includes/header.php" ?>
    <div id="wrapper" class="<?php echo $character; ?>">
        <main>
            <h1><?php echo $today; ?> is for <?php echo $character; ?></h1>
            <p><?php echo $description; ?></p>
        </main>
        
        <aside>
            <div id="circlePhotoWrapper">
                <img id="characterPhoto" src="<?php echo $photo; ?>" alt="<?php echo $alt; ?>" >
            </div>
            <blockquote>
                "<?php echo $quote; ?>"
            </blockquote>
            
        </aside>

        <div id="listWrapper">
            <h3>Daily Lord of the Rings Character Pages</h3>
            <ul>
                <?php 
                    foreach($day_array as $character => $day){
                        echo '<li><a href="daily.php?today='.$day.'">'.$character.'</a></li>';
                    };
                ?>
            </ul>
            <p>All Lord of the Rings content sourced from <a href="https://lotr.fandom.com/wiki/Main_Page">The One Wiki</a></p>
        </div> <!--End listWrapper-->
<?php include "includes/footer.php" ?>