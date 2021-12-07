<?php include('includes/header.php'); ?>

<?php 

date_default_timezone_set('America/Los_Angeles');

if(isset($_GET['today'])){
    $today = $_GET['today'];
}else{
    $today = date('l');
}
$day_array = array(
    "" => "Sunday",
    "" => "Monday",
    "" => "Tuesday",
    "" => "Wednesday",
    "" => "Thursday",
    "" => "Friday",
    "" => "Saturday",
);
// switch

switch($today){
    case 'Sunday':
        $movie = '';
        $director = '';
        $description = '';
        $photo = 'images/';
        $alt = '';
        $quote = '';
        break;
    case 'Monday':
        $movie = '';
        $director = '';
        $description = '';
        $photo = 'images/';
        $alt = '';
        $quote = '';
        break;
    case 'Tuesday':
        $movie = '';
        $director = '';
        $description = '';
        $photo = 'images/';
        $alt = '';
        $quote = '';
        break;
    case 'Wednesday':
        $movie = '';
        $director = '';
        $description = '';
        $photo = 'images/';
        $alt = '';
        $quote = '';
        break;
    case 'Thursday':
        $movie = '';
        $director = '';
        $description = '';
        $photo = 'images/';
        $alt = '';
        $quote = '';
        break;
    case 'Friday':
        $movie = '';
        $director = '';
        $description = '';
        $photo = 'images/';
        $alt = '';
        $quote = '';
        break;
    case 'Saturday':
        $movie = '';
        $director = '';
        $description = '';
        $photo = 'images/';
        $alt = '';
        $quote = '';
        break;    
    }
?>
<div id="wrapper">
    <main>
        <h3><?php echo $today;?></h3>
    </main>
    <aside>

    </aside>
</div>
<?php include('includes/footer.php'); ?>