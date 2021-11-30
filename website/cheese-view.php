<?php 
include('includes/header.php');

//if isset $_GET

if(isset($_GET['id'])){
    $id = (int)$_GET['id'];

}else{
    header('Location: project.php');
}

$sql = 'SELECT * FROM cheeses WHERE cheese_id = '.$id.' ';

// connect to the database using mysqli_connect() function

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// create a variable $result 

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
    
    while($row = mysqli_fetch_assoc($result)) {
        $cheese_name = stripslashes($row['cheese_name']);
        $cheese_animal = stripslashes($row['cheese_animal']);
        $cheese_region = stripslashes($row['cheese_region']);
        $cheese_description = stripslashes($row['cheese_description']);
        $feedback = '';
    }//end while
}else {
    $feedback = 'Something is not working.';
}
// for the BIG assignment, you will now call out the header.php include

?>
<div id="wrapper">
<main>
<h1><?php echo $cheese_name;?> Cheese</h1>

<?php 
if($feedback == '') {
    echo '<ul>';
    echo '<li><b>Cheese Name:</b> '.$cheese_name.'</li>';
    echo '<li><b>Cheese Animal:</b> '.$cheese_animal.'</li>';
    echo '<li><b>Cheese Region:</b> '.$cheese_region.'</li>';
    
    echo '<ul>';
    echo '<p>'.$cheese_description.'</p>';
    echo '<p>Return Back to the <a href="project.php">Cheese Page</a></p>';
}

?>
</main>

<aside>
<?php
if($feedback ==''){
    echo '<img class="cheese center" src="images/cheese/'.$cheese_name.'.jpg" alt="'.$cheese_name.'">';
}
?>
</aside>
<?php

// closing databse connection
mysqli_free_result($result);
mysqli_close($iConn);

include('includes/footer.php');
?>